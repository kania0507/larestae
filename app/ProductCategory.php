<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    public function products(){
        return $this->hasmany(Product::class);
    }
}
