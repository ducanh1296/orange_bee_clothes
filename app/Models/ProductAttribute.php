<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    protected $fillable = [
        'product_id',
        'color_id',
        'size_id',
        'attribute_quantity',
        'attribute_image',
    ];
}