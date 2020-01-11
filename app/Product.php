<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function productFiles() {
        return $this->hasMany('App\ProductFile');
    }
}
