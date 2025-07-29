<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function render($id){
        return view('category', [
            'title' => 'Categoria',
            'category' => Category::where('id', $id)->first(),
            'products' => Product::where('category_id', $id)->get()
        ]);
    }
}
