<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
		{
		//$users = User::orderBy('created_at', 'desc')->get();
		return view('admin.user.index');
		}
}
