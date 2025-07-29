<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $filltable = [
        'name',
        'description',
        'price',
        'image',
        'quantity',
        'collection_id',
    ];

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
