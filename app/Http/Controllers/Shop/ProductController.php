<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Attributeset;
use App\Product;
use App\Productmeta;
use App\Productimage;
use App\Category;
use App\Comment;
use App\Ecclass\CategoryList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('user_id',Auth::user()->id)->with('productmetas')->with('productimages')->orderBy('created_at', 'desc')->paginate(config('constants.items_per_page'));
       /*foreach($products as $product){
           $pinfo = Product::find($product->id)->productmetas;
           foreach($pinfo as $p){
               if($p->namemeta == 'name') {
                   echo "<h3>ID:".$p->product_id."</h3>";
                   echo "<h3>" . $p->namemeta . " : " . $p->value . "</h3>";
               }
           }
           echo "<hr>";
       }*/
        return view('shop.user.allproducts')->with('products',$products);
    }

    public function producttype()
    {
        $shop = Auth::user()->shop;
        if(!$shop) {
            return redirect('shop/Shop')->with('shopDetails', 'Please fill your shop information first!!');
        }
        else {
            $attributeset = Attributeset::all();
            return view('shop.user.product')->with('attributeset', $attributeset);
        }

    }

    
    public function newproduct($id)
    {
        $attributes = Attributeset::find($id);
        $categoryList = new CategoryList();
        $lists = $categoryList->get_opt($categoryList->build_list());
        return view('shop.user.product-form')->
        with('attributes', $attributes)->
        with('lists',$lists);
        //foreach($attributes->attributes as $attribute){
            //echo $attribute->name."<br>";            
            //@include('shop.user.partial.product-form');
       // }
        
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
       //dd($request);
        $productvalues = [];
        foreach($request->request as $k=>$v){
            if($k == '_token'){$token = $v;}
            else if($k == 'savebtn' ){$savebtn = $v;}
            else if($k == 'attsetid' ){$attsetid = $v;}
            else if($k == 'categories' ){$categories = $v;}
            else if($k == 'pimages' ){
                $imageArr = $v;
                /*$imageArr=[];
              foreach($v as $pk=>$pv){
                  $imageArr[] = new Productimage(['imagename'=>$pv]);
              }*/

            }
            else if($k == 'availablecolor-11' ){$availablecolor = implode(",",$v);
                $productvalues[] = [
                    'attribute_id'=>11,
                    'namemeta'=>'availablecolor',
                    'value'=>$availablecolor,
                ];
            }

            else{
                list($n, $id) = explode("-", $k);
                $productvalues[] = [
                    'attribute_id'=>$id,
                    'namemeta'=>$n,
                    'value'=>$v,
                ];
            }
        }
        //dd($attsetid);
        $newProduct = new Product();
        $newProduct->attributeset_id = $attsetid;
        $newProduct->user_id = Auth::user()->id;

        $newProduct->save();
        echo $newProduct->id;
        //insert product images
        foreach($imageArr as $v){
            $newimage = new Productimage();
            $newimage->imagename = $v;
            $newProduct->productimages()->save($newimage);
            //Storage::move(public_path('images/producttemp/').$v, public_path('images/product/').$v);

            File::move(public_path('images/producttemp/').$v, public_path('images/product/').$v);
        }
           // $newProduct->productimages()->saveMany($imageArr);

        //insert product images
        //dd($productvalues);
        foreach($productvalues as $productvalue) {
            $newProductMeta = new Productmeta();
            $newProductMeta->product_id = $newProduct->id;
            $newProductMeta->attribute_id = $productvalue['attribute_id'] ;
            $newProductMeta->namemeta = $productvalue['namemeta'] ;
            $newProductMeta->value = $productvalue['value'] ;
            $newProductMeta->save();
        }
        //add categories for products in pivot table
        if (count($categories) > 0) {
            $newProduct->categories()->attach($categories);
        }
        
        
        
        /*
        //image upload
        $imageName = time().'.'.request()->image->getClientOriginalExtension();

        request()->image->move(public_path('images/product'), $imageName);



        return back()

            ->with('success','You have successfully upload image.')

            ->with('image',$imageName);

        */
    }

    private function imagediv($fil){
        $divtoreturn = '<div class="image"><div class="frame"><img height="90" src="'.asset("images/producttemp")."/".$fil.'" width="120" class="img-thumbnail"><input class="image_id" name="pimages[]" type="hidden" value="'.$fil.'"><input class="cancel delete btn btn-primary" data-id="'.$fil.'" type="button" value="delete"></div></div>';
        return $divtoreturn;
    }
    
    public function imageup(Request $request){
        //return $request->all();
        /*$count = count($_FILES['fileToUpload']['name']);
        for ($i = 0; $i < $count; $i++) {
            echo 'Name: '.$_FILES['fileToUpload']['name'][$i].'<br/>';
        }*/
        $userid = Auth::user()->id;

    foreach($request->fileToUpload as $image){
        //echo 'Name: '.$image->path().'<br/>';
        $imageName = time().'_'.$userid."_".rand(20000,50000).".".$image->getClientOriginalExtension();
        $image->move(public_path('images/producttemp'), $imageName);
        echo $this->imagediv($imageName);
    }
    }
    //delete image
    public function imagedown(Request $request){
if(is_file(public_path('images\producttemp\\').$request->imageid)) {
    if(unlink(public_path('images\producttemp\\') . $request->imageid)){
        return response()->json(['success'=>"true",'message'=>'deleted']);
    }
    else{
        return response()->json(['success'=>"false",'message'=>'error']);
    }

}
else{
    return response()->json(['success'=>"false",'message'=>'file not found']);
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
        $single_product = Product::where('id',$id)
            ->where('user_id',Auth::user()->id)
            ->with('productmetas')
            ->with('productimages')
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
	
	//comment
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
        return response()->json(['success'=>"true",'message'=>'Comment Added Successfully']);
        }
    }
}
