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
        array_push($oldSession, $id);
        session(['productslist' => $oldSession]);

    }
    //
}
