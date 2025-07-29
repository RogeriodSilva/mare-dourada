<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function render()
    {
        return view('home', [
            'title' => 'Inicio',
            'products' => Product::all()
        ]);
    }

    public function about()
    {
        return view('about');
    }

}
