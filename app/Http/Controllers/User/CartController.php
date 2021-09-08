<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Product;
use App\Productmeta;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
     public function addcart(Request $request)
    {
        $single_product = Product::where('id',$request->pid)->with('productmetas')->get();
         $pname = "";
         $price = "";
        foreach($single_product as $product){
            foreach($product->productmetas as $pm){
            if($pm->namemeta=='name'){
                $pname.=$pm->value;
            }
            if($pm->namemeta=='price'){
                $price.=$pm->value;
            }
        }
        }
    
        Cart::add($request->pid, $pname, $request->quantity, preg_replace('/\D/', '', $price));
         
        return response()->json(['success'=>'true','message'=>'Added']);
    }
    
    public function cartdiv()
    {
        $link = url("/cartDetails");
        $cart_div = '<div class="cart box" style="padding:25px;"><a href="'.$link.'"><h4> <div class="total"><i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i><span class="simpleCart_total">'.Cart::subtotal().'</span>(<span id="simpleCart_quantity" class="simpleCart_quantity">'.Cart::count().'</span> items)</div></h4></a></div>';
        
        echo $cart_div;
    }
    
    
    public function removecartitem($id)
    {
        //echo $id;
        Cart::remove($id);
        return response()->json(['success'=>'true','message'=>'Removed']);
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
        //
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

    //update cart quantity
    public function updatecartitem(Request $request)
    {
        Cart::update($request->rowid, $request->quantity);
        return response()->json(['success'=>'true','message'=>'updated']);
    }
    //update cart quantity end

    //empty cart start
    public function emptycart(Request $request)
    {
        Cart::destroy();
        return redirect()->to('/cartDetails');

    }
    //emptycart end
}
