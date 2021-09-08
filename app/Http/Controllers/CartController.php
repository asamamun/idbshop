<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
        // Add some items in your Controller.
        return view("cart");
    }

    public function add()
    {

        Cart::add('192ao13', 'Product 1', 1, 9.99);
        Cart::add('1239ad0', 'Product 2', 2, 5.95, ['size' => 'large']);
//        foreach(Cart::content() as $row) {
//            echo 'You have ' . $row->qty . ' items of ' . $row->model->name . ' with description: "' . $row->model->description . '" in your cart.';
//        }
    }

    public function emptycart()
    {
        //Cart::destroy();
    }

    public function updatecart()
    {
        Cart::update('68da517a7ddc2ee72423ff389af77bda', 2);
    }
}
