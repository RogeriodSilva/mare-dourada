<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feedback extends Model
{
    use HasFactory;

    protected $filltable = [
        'name',
        'comment',
        'product_id',
        'user_id',
    ];
}
