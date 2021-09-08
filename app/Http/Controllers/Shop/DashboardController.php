<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
		{
		//$users = User::orderBy('created_at', 'desc')->get();
		return view('shop.user.index');
		}
}
