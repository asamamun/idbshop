<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'HomeController@index');
Route::get('/singleProduct/{id}', 'HomeController@single');
Route::get('/cartDetails', 'HomeController@cartdetail');
Route::get('/checkout', 'HomeController@checkout')->middleware('user');
Route::get('/emptycart', 'User\CartController@emptycart')->middleware('user');
Route::get('/userAddress', 'HomeController@userAddress')->middleware('user');
Route::post('/addUserDetails', 'HomeController@addUserDetail')->middleware('user');
Route::get('/showUserDetails/{id}', 'HomeController@showUserDetail')->middleware('user');
Route::put('/updateUserDetails/{id}', 'HomeController@updateUserDetail')->middleware('user');
Route::get('/singleShop/{id}', 'HomeController@singleShop');
Route::get('/shops', 'HomeController@allShop');
Route::get('/allProducts', 'HomeController@allProductsLoop');    
Route::post('/comment','Shop\ProductController@addreview')->middleware('user');





//Cart example start
//Route::get('/addcart', 'CartController@add');
//Route::get('/showcart', 'CartController@index');
//Route::get('/emptycart', 'CartController@emptycart');
//Route::get('/updatecart', 'CartController@updatecart');
//Cart example end



Route::group([
'prefix' => 'admin', 
'namespace' => 'admin',
'middleware' => 'admin'
], function()
{
Route::get('dashboard', 'DashboardController@index');	
Route::resource('Category', 'CategoryController');
Route::resource('attribute', 'AttributeController');
Route::resource('attributeset', 'AttributesetController');
Route::resource('user', 'UserController');	

//Route::get('users', 'UserController@users');
});

Route::group([
'prefix' => 'shop', 
'namespace' => 'shop',
'middleware' => 'shop'
], function()
{
Route::get('dashboard', 'DashboardController@index');
Route::resource('Shop', 'ShopController');
Route::get('product-type', 'ProductController@producttype');
Route::get('product/add/{id}', 'ProductController@newproduct');
Route::resource('product', 'ProductController');
Route::post('/imageupload','ProductController@imageup');
Route::post('/imagedelete','ProductController@imagedown');
});




Route::group([
'prefix' => 'user', 
'namespace' => 'user',
'middleware' => 'user'
], function()
{
Route::resource('product', 'ProductController');
Route::post('/addcart', 'CartController@addcart');
Route::post('/updatecart', 'CartController@cartdiv');
Route::post('/updatecartitem', 'CartController@updatecartitem');
Route::delete('/removeitem/{id}','CartController@removecartitem');
//Route::get('/emptycart', 'CartController@emptycart');
//Route::resource('List', 'ListController');
//Route::resource('Product', 'ProductController');	
//Route::resource('user', 'UserController');
});


Auth::routes();
