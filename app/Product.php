<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function productCategory(){
        return $this->belongsTo(ProductCategory::class);
    }
}
