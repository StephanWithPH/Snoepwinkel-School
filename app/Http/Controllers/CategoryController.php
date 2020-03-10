<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function loadCategory($id){
        $category = Category::find($id);
        if(!$category){
            return "Categorie niet gevonden";
        }
        else if($category){
            return view('category', compact('category'));
        }
    }
}
