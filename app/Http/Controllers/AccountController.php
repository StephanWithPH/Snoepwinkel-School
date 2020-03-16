<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function loadMyAccount(){
        $user = Auth::user();
        return view('myaccount', compact('user'));
    }
}
