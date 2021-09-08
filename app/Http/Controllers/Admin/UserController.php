<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(config('constants.user_group'));
		$users = User::orderBy('created_at', 'desc')->paginate(config('constants.items_per_page'));
		return view('admin.user.users')->with('users', $users);
		//dd($users);
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
        $newuser = new User();
		$newuser->name = $request->name;
		$newuser->email = $request->email;
		$newuser->password = bcrypt($request->password);
		$newuser->user_group = $request->user_group;
		$newuser->save();
		if($newuser->id){
		echo "user added. Id:".$newuser->id ;
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
        $userinfo = User::find($id);
        
        return response()->json($userinfo);
        
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
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->user_group = $request->user_group;
        $user->save();
        return response()->json(['success'=>'true','message'=>'Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // echo "deleted";
		$task = User::destroy($id);
		return response()->json(['success'=>'true','message'=>'deleted']);
    }
}
