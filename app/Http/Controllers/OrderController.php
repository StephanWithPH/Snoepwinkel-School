<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function loadOrder(){
        if(session('productslist') == [] || !session('productslist')){
            flash(__('flashes.orderwithoutproducts'))->error();
            return redirect()->back();
        }
        return view('order');
    }
    //
    public function createOrder(Request $request){
        if(session('productslist') == [] || !session('productslist')){
            flash(__('flashes.orderwithoutproducts'))->error();
            return redirect()->back();
        }
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
            for($i = 0; $i < $sessionProduct['amount']; $i++){
                array_push($sessionProducts, Product::find($sessionProduct['id']));
            }
        }
        $order->save();
        $order->products()->saveMany($sessionProducts);
        Auth::user()->orders()->save($order);
        session(['lastCreatedOrderId' => $order->id]);
        session()->forget('productslist');

        return redirect()->action('OrderController@createOrderConfirmed');
    }

    public function createOrderConfirmed(){
        $lastCreatedOrderId = session('lastCreatedOrderId');
        return view('orderconfirmed', [
            'lastCreatedOrderId' => $lastCreatedOrderId,
            'paid' => Order::find($lastCreatedOrderId)->paid
        ]);
    }
}
