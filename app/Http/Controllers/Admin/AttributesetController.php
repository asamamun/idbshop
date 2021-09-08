<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Attributeset;
use App\Attribute;

class AttributesetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        
        $attribsets = Attributeset::orderBy('created_at', 'desc')->paginate(config('constants.items_per_page'));
		$attributes = Attribute::orderBy('attgroup','desc')->get();
		//dd()
		return view('admin.user.attribsets')->
		with('attribsets', $attribsets)->
		with('attributes',$attributes);
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
        //echo $request->name;return;
        //
        /*$validation = Validator::make( Input::all(), [
            'name' => 'required|max:50',
            'content' => 'required',

        ]);

        if( $validation->fails() )
        {
            return response()->json([
                'errors' => $validation->errors()->getMessages(),
                'code' => 422
            ]);
        }*/
        //
        $newattribset = new Attributeset();
		$newattribset->name = $request->name;
        $newattribset->content = $request->content;
		$newattribset->save();
		if($newattribset->id){
		$attributes = 	explode(",",$request->att);
		//foreach($attributes as $a){
		$newattribset->attributes()->attach($attributes);
		return response()->json(['success'=>'true','message'=>'Inserted']);
		//}
		//echo "Attribute Set added. Id:".$newattribset->id ;
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
        $attribsetsinfo = Attributeset::find($id); 
		$attribsets_attributes = Attributeset::find($id)->attributes()->orderBy('name')->get();
		
        return response()->json(['asi'=>$attribsetsinfo,'asia'=>$attribsets_attributes]);
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
        $newattribset = Attributeset::find($id);
		$newattribset->name = $request->name;
        $newattribset->content = $request->content;
		$newattribset->save();
		if($newattribset->id){
            $attributes = 	explode(",",$request->att);
            //foreach($attributes as $a){
            $newattribset->attributes()->sync($attributes);
		return response()->json(['success'=>'true','message'=>'Updated']);
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Attributeset::destroy($id);
		return response()->json(['success'=>'true','message'=>'deleted']);
    }
}
