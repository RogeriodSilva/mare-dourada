<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    //
    public function render($id)
    {
        return view('collection', [
            'title' => 'Coleção',
            'collection' => Collection::where('id', $id)->first(),
            'products' => Product::where('collection_id', $id)->get()
        ]);
    }
}
