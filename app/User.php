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
        'name', 'email', 'password','user_group',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	public function shop()
        {
            return $this->hasOne('App\Shop');
        }
    public function userdetail()
    {
        return $this->hasOne('App\UserDetail');
    }
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
