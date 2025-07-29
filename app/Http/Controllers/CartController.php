<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Ashraam\LaravelSimpleCart\CartItem;
use Ashraam\LaravelSimpleCart\CartModifier;
use Illuminate\Http\Request;
use Ashraam\LaravelSimpleCart\Facades\Cart;

class CartController extends Controller
{

    public function render()
    {
        return view('cart');
    }

    public function clear()
    {
        Cart::clear();
        return redirect()->back()->with('cart_success', 'Carrinho limpo');
    }

    public function add(Request $request)
    {

        $product = Product::where('id', $request->product_id)->first();
        $item = new CartItem(
            id: $product->id,
            name: $product->name,
            price: $product->price,
            quantity: $request->quantity,
            meta: [
                'image' => $product->image
            ]
        );

        Cart::add($item);
        return redirect()->back()->with('cart_success', 'Produto adicionado ao carrinho');
    }

    public function remove($id)
    {


        // dd(Cart::content());



        try {
            Cart::remove($id);
            return redirect()->back()->with('cart_success', 'Produto removido do carrinho');

        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('cart_error', 'Produto não encontrado no carrinho');
        }
    }

    public function update() {}
}
