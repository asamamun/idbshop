<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Attribute;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attributes = Attribute::orderBy('created_at', 'desc')->paginate(config('constants.items_per_page'));
		return view('admin.user.attributes')->with('attributes', $attributes);
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
        $newattrib = new Attribute();
		$newattrib->name = $request->name;
		$newattrib->content = $request->content;		
		$newattrib->unit = $request->unit;
        $newattrib->type = $request->type;		
		$newattrib->values = $request->values;
		$newattrib->save();
		if($newattrib->id){
		echo "Attribute added. Id:".$newattrib->id ;
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
        $attribinfo = Attribute::find($id);        
        return response()->json($attribinfo);
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
        $newattrib = Attribute::find($id);
		$newattrib->name = $request->name;
		$newattrib->content = $request->content;		
		$newattrib->unit = $request->unit;
        $newattrib->type = $request->type;		
		$newattrib->values = $request->values;
		$newattrib->save();
		if($newattrib->id){
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
        $task = Attribute::destroy($id);
		return response()->json(['success'=>'true','message'=>'deleted']);
    }
}
