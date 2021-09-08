<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
	 public function attributesets()
    {
        return $this->belongsTo('App\Attributeset');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
	
    public function shop()
    {
        return $this->belongsTo('App\Shop');
    }
	
	public function productmetas()
    {
        return $this->hasMany('App\Productmeta');
    }
	public function productimages()
    {
        return $this->hasMany('App\Productimage');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category')->withTimestamps();
    }
	
	 public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
	
	
}
