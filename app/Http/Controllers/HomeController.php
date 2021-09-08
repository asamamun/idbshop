<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use App\UserDetail;
use App\User;
use App\Shop;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $categoryname = Category::orderBy('created_at', 'desc')->get();
        $products = Product::with('productmetas')
            ->with('productimages')
            ->with('user.shop')
            ->with('categories')
            ->orderBy('created_at', 'desc')->limit(12)->get();
        
        return view('frontEnd.homeContent')
            ->with('categoryname',$categoryname)
            ->with('products',$products);
        
    }


    public function single($id)
    {
        $single_product = Product::where('id',$id)
            ->with('productmetas')
            ->with('productimages')
            ->with('user.shop')
            ->with('categories')->get();
        /*$pinfo = Product::find($id)->productmetas;
        $pimages = Product::find($id)->productimages;
        foreach($pinfo as $p){
            echo "<h3>".$p->namemeta. " : " . $p->value."</h3>";
        }
        echo "<h3>Images</h3>";
        foreach($pimages as $pimage){
            echo "<h3>".$pimage->imagename. "</h3>";
        }*/
        $categoryname = Category::orderBy('created_at', 'desc')->get();

        return view('frontEnd.singleProduct')->with('product',$single_product)->with('categoryname',$categoryname);
    }
    
    public function allProductsLoop()
    {
        $categoryname = Category::orderBy('created_at', 'desc')->get();
            
        $allProductFront = Product::with('productmetas')
            ->with('productimages')
            ->with('user.shop')
            ->with('categories')
            ->orderBy('created_at', 'desc')->paginate(12); 

        return view('frontEnd.allProductsLoop')->with('categoryname',$categoryname)->with('allProductFront',$allProductFront);
    }
    
    public function allShop()
    {
        $categoryname = Category::orderBy('created_at', 'desc')->get();
            
        $all_shop = Shop::orderBy('created_at', 'desc')->paginate(12);    

        return view('frontEnd.shops')->with('categoryname',$categoryname)->with('all_shop',$all_shop);
    }
    
    
    public function singleShop($id)
    {
        $categoryname = Category::orderBy('created_at', 'desc')->get();
        $single_shop = Shop::where('user_id',$id)->get();
            
        $single_shop_product = Product::where('user_id',$id)
            ->with('productmetas')
            ->with('productimages')->orderBy('created_at', 'desc')->paginate(9);    

        return view('frontEnd.singleShop')->with('categoryname',$categoryname)->with('singleShop',$single_shop)->with('singleShopProduct',$single_shop_product);
    }


    public function cartdetail()
    {
        $categoryname = Category::orderBy('created_at', 'desc')->get();

        return view('frontEnd.cartDetails')->with('categoryname',$categoryname);
    }
    
    public function checkout()       

    {   
        $categoryname = Category::orderBy('created_at', 'desc')->get();

        return view('frontEnd.checkout')->with('categoryname',$categoryname);
    }
    
    public function userAddress()       

    {   
        $categoryname = Category::orderBy('created_at', 'desc')->get();
        return view('frontEnd.userAddress')->with('categoryname',$categoryname);
    }
    
    public function addUserDetail(Request $request)
    {

		$currentuser = User::find(Auth::user()->id);	   
		$UD=UserDetail::where('user_id',$currentuser->id)->get();
		//var_dump(count($UD));exit;
		if(count($UD)){
			//update code
		foreach($UD as $u){$userdetailsid = $u->id;break;}
		$newuseraddr = UserDetail::find($userdetailsid);
		//$newuseraddr->id = $userdetailsid;
		$newuseraddr->user_id = $request->id;        
		$newuseraddr->b_first_name = $request->b_first_name;
		$newuseraddr->b_last_name = $request->b_last_name;		
		$newuseraddr->b_company_name = $request->b_company_name;
        $newuseraddr->b_email = $request->b_email;
		$newuseraddr->b_phone = $request->b_phone;		
		$newuseraddr->b_country = $request->b_country;
        $newuseraddr->b_address1 = $request->b_address1;
		$newuseraddr->b_address2 = $request->b_address2;		
		$newuseraddr->b_city = $request->b_city;
        $newuseraddr->b_district = $request->b_district;
		$newuseraddr->b_zip = $request->b_zip;		
		$newuseraddr->s_first_name = $request->s_first_name;
		$newuseraddr->s_last_name = $request->s_last_name;		
		$newuseraddr->s_company_name = $request->s_company_name;
        $newuseraddr->s_email = $request->s_email;
		$newuseraddr->s_phone = $request->s_phone;		
		$newuseraddr->s_country = $request->s_country;
        $newuseraddr->s_address1 = $request->s_address1;
		$newuseraddr->s_address2 = $request->s_address2;		
		$newuseraddr->s_city = $request->s_city;
        $newuseraddr->s_district = $request->s_district;
		$newuseraddr->s_zip = $request->s_zip;		
		$currentuser->userdetail()->save($newuseraddr);
		return response()->json(['success'=>'true','message'=>'User Address Updated']);
		}
		else {
			//insert code			
		$newuseraddr = new UserDetail();
		$newuseraddr->user_id = $request->id;        
		$newuseraddr->b_first_name = $request->b_first_name;
		$newuseraddr->b_last_name = $request->b_last_name;		
		$newuseraddr->b_company_name = $request->b_company_name;
        $newuseraddr->b_email = $request->b_email;
		$newuseraddr->b_phone = $request->b_phone;		
		$newuseraddr->b_country = $request->b_country;
        $newuseraddr->b_address1 = $request->b_address1;
		$newuseraddr->b_address2 = $request->b_address2;		
		$newuseraddr->b_city = $request->b_city;
        $newuseraddr->b_district = $request->b_district;
		$newuseraddr->b_zip = $request->b_zip;		
		$newuseraddr->s_first_name = $request->s_first_name;
		$newuseraddr->s_last_name = $request->s_last_name;		
		$newuseraddr->s_company_name = $request->s_company_name;
        $newuseraddr->s_email = $request->s_email;
		$newuseraddr->s_phone = $request->s_phone;		
		$newuseraddr->s_country = $request->s_country;
        $newuseraddr->s_address1 = $request->s_address1;
		$newuseraddr->s_address2 = $request->s_address2;		
		$newuseraddr->s_city = $request->s_city;
        $newuseraddr->s_district = $request->s_district;
		$newuseraddr->s_zip = $request->s_zip;
		
		$currentuser->userdetail()->save($newuseraddr);
		return response()->json(['success'=>'true','message'=>'User Address Saved']);	
		}
		

        
		
    }
    
    public function showUserDetail($id)
    {
       $userinfo = UserDetail::where('user_id',$id)->get();
        
        //$userinfo = UserDetail::find(1);
        return response()->json($userinfo);
    }
    
    public function updateUserDetail(Request $request, $id)
    {
        $currentuser = User::find(Auth::user()->id);
        
        $newuseraddr = UserDetail::find($id); 
 
        $newuseraddr->user_id = $currentuser->id;        
		$newuseraddr->b_first_name = $request->b_first_name;
		$newuseraddr->b_last_name = $request->b_last_name;		
		$newuseraddr->b_company_name = $request->b_company_name;
        $newuseraddr->b_email = $request->b_email;
		$newuseraddr->b_phone = $request->b_phone;		
		$newuseraddr->b_country = $request->b_country;
        $newuseraddr->b_address1 = $request->b_address1;
		$newuseraddr->b_address2 = $request->b_address2;		
		$newuseraddr->b_city = $request->b_city;
        $newuseraddr->b_district = $request->b_district;
		$newuseraddr->b_zip = $request->b_zip;		
		$newuseraddr->s_first_name = $request->s_first_name;
		$newuseraddr->s_last_name = $request->s_last_name;		
		$newuseraddr->s_company_name = $request->s_company_name;
        $newuseraddr->s_email = $request->s_email;
		$newuseraddr->s_phone = $request->s_phone;		
		$newuseraddr->s_country = $request->s_country;
        $newuseraddr->s_address1 = $request->s_address1;
		$newuseraddr->s_address2 = $request->s_address2;		
		$newuseraddr->s_city = $request->s_city;
        $newuseraddr->s_district = $request->s_district;
		$newuseraddr->s_zip = $request->s_zip;
        
		$currentuser->userdetail()->save($newuseraddr);
		if($newuseraddr->id){
		return response()->json(['success'=>'true','message'=>'Updated']);
		}
    }
    
}
