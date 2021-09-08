<?php
namespace App\Ecclass;
use App\User;
class Userinfo{
	static function username($id){
		return User::find($id)->name;
	}
	
}