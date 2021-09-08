<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Ecclass\CategoryList;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()	
    {
        //config('constants.items_per_page','1');
		//\Config::set('constants.items_per_page', '1' );
        $categoryList = new CategoryList();
		$categories = Category::orderBy('created_at', 'desc')->paginate(config('constants.items_per_page'));
        $lists = $categoryList->get_opt($categoryList->build_list());
		return view('admin.user.categories')->with('categories', $categories)->with('lists',$lists);
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
        $newcat = new Category();
		$newcat->catname = $request->catname;
		$newcat->description = $request->description;		
		$newcat->parent_id = $request->parent_id;
		$newcat->save();
		if($newcat->id){
		echo "category added. Id:".$newcat->id ;
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
       $catinfo = Category::find($id);
        
        return response()->json($catinfo);
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
        $newcat = Category::find($id);
		$newcat->catname = $request->catname;
		$newcat->description = $request->description;		
		$newcat->parent_id = $request->parent_id;
		$newcat->save();
		if($newcat->id){
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
        $task = Category::destroy($id);
		return response()->json(['success'=>'true','message'=>'deleted']);
    }
}
