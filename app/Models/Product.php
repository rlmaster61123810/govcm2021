<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // product type
    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }
}
