<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart($id){
        $oldSession = session('productslist');
        if(!is_array($oldSession)){
            session(['productslist' => []]);
        }
        $newSession = session('productslist');
        $itemExists = false;
        foreach($newSession as $key => $item){
            if($item['id'] == $id){
                $newSession[$key]['amount']++;
                $itemExists = true;
            }
        }
        if(!$itemExists){
            array_push($newSession, ['id' => $id, 'amount' => 1]);
        }
        session(['productslist' => $newSession]);
        flash(__('flashes.addcartsuccess'))->success();
        return redirect()->back();
    }
    //

    public function loadCart(){
        $cartProducts = [];
        if(session('productslist')){
            foreach(session('productslist') as $cartSessionProduct){
                array_push($cartProducts, ['product' => \App\Product::find($cartSessionProduct['id']), 'amount' => $cartSessionProduct['amount']]);
            }
        }
        return view('cart', compact('cartProducts'));
    }
    //

    public function removeFromCart($id){
        $products = session()->pull('productslist', []);

        foreach($products as $key => $product){
            if($product['id'] == $id){
                unset($products[$key]);
            }
        }
        session()->put('productslist', $products);
        flash(__('flashes.removecartsuccess'))->info();
        return redirect()->action('CartController@loadCart');

    }
}
