<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
       
	   public function attributesets()
    {
        return $this->belongsToMany('App\Attributeset');
    }
}
