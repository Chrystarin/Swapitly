<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
            //Table Name
            protected $table = 'ratings';
            //Primary Key
            public $primaryKey = 'id';
            // Timestamps
            public $timestamps= true;
    
            public function user(){
                return $this->belongsTo('App\User');
        }
}
