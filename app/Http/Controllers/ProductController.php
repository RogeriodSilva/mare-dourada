<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function render($id)
    {

        $product = Product::where('id', $id)->first();

        return view('product-view', [
            'title' => $product->name,
            'product' => $product
        ]);
    }

    public function list(Request $request)
    {
        $products = Product::query();

        // Filtros
        if ($request->search) {
            $products->where('name', 'LIKE', "%{$request->search}%");
        }

        if ($request->filled('price')) {
            parse_str($request->price, $price);
            if (isset($price['min_price']) && isset($price['max_price'])) {
                $products->whereBetween('price', [$price['min_price'], $price['max_price']]);
            }
        }

        if ($request->filled('order')) {
            switch ($request->order) {
                case 'highest':
                    $products->orderBy('price', 'desc');
                    break;
                case 'lowest':
                    $products->orderBy('price', 'asc');
                    break;
                case 'latest':
                    $products->orderBy('created_at', 'desc');
                    break;
            }
        }


        return view('products-list', [
            'title' => 'Nossos Produtos',
            'products' => $products->get()
        ]);
    }
}
