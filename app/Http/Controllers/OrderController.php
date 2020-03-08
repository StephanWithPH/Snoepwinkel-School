<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function loadOrder(){
        return view('order');
    }
    //
    public function createOrder(Request $request){
        $order = new Order();
        $order->email = $request->input('email');
        $order->firstname = $request->input('firstname');
        $order->lastname_prefix = $request->input('lastnameprefix');
        $order->lastname = $request->input('lastname');
        $order->streetname = $request->input('streetname');
        $order->housenumber = $request->input('housenumber');
        $order->postcode = $request->input('postcode');
        $order->telephone = $request->input('telephone');
        $order->city = $request->input('city');

        $sessionProducts = [];
        foreach(session('productslist') as $sessionProduct){
            array_push($sessionProducts, Product::find($sessionProduct['id']));
        }
        $order->save();
        $order->products()->saveMany($sessionProducts);

    }
}
