<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Shop;
use App\User;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = Auth::user();
		return view('shop.user.shop');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {           
        
        
	   $currentuser = User::find(Auth::user()->id);
       //dd($currentuser->id);
	   $shopImagePath = public_path('images/shop');
	   //original image name
	   $coverImage = $request->file('cover_image');
	   $profileImage = $request->file('profile_image');
	   //rename image name 	
	   $coverImageName = $currentuser->id.'_coverimage_'.uniqid().'.'.$coverImage->getClientOriginalExtension();
	   $profileImageName = $currentuser->id.'_profileimage_'.uniqid().'.'.$profileImage->getClientOriginalExtension();
	   //upload images
	   $coverImage->move($shopImagePath, $coverImageName);
	   $profileImage->move($shopImagePath, $profileImageName);
        
	   $newshop = new Shop();
		$newshop->name = $request->name;
		$newshop->description = $request->description;		
		$newshop->address = $request->address;
        $newshop->tel1 = $request->tel1;
		$newshop->tel2 = $request->tel2;		
		$newshop->branch = $request->branch;
        $newshop->email = $request->email;
		$newshop->fb_pageid = $request->fb_pageid;	
		$newshop->contact_person = $request->contact_person;
        $newshop->coverimage = $coverImageName;
        $newshop->profileimage = $profileImageName;
        $newshop->user_id = $currentuser->id;
        //save to database
		$currentuser->shop()->save($newshop);
        
        if($newshop->id){
		echo "Shop Added. Id:".$newshop->id ;
		}
    }
    
    
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
