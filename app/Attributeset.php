<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attributeset extends Model
{
    protected $fillable = [
        'name', 'content',
    ];
    public function attributes()
    {
        return $this->belongsToMany('App\Attribute');
    }
	
	public function products()
    {
        return $this->hasMany('App\Product');
    }
	
}
