<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'email', 'password', 'username', 'first_name', 'last_name', 'birthday', 'gender', 'mobile_number', 'address', 'description'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Table Name
    protected $table = 'users';
    //Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps= true;

    public function ratings(){
        return $this->hasMany('App\Rating');
    }

    public function products() {
        return $this->belongsToMany('App\Product');
    }
}
