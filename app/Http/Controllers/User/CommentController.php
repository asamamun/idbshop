<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Comment;
use Auth;

class CommentController extends Controller
{
    public function addreview(Request $request)
    {
        
		$product = Product::find($request->pid);
        
        $newcomment = new Comment();
        $newcomment->body = $request->comment_body;
        $newcomment->rating = $request->rating;
        //$newcomment->commentable_id = $request->pid;
        $newcomment->user_id = Auth::user()->id;
        
        $product->comments()->save($newcomment);
        
        if($newcomment->id){
        return response()->json(['success'=>"true",'message'=>'Comment Added']);
        }
    }
}
