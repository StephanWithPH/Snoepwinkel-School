<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function loadHomePage(){
        $products = \App\Product::all();
        return view('home', compact('products'));
    }
    //
}
