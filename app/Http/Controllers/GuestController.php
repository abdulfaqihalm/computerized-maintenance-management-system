<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    // This controller will handle a guest that enter the app 

    public function getPage() { 
        if (Auth::check()) {
            return redirect()->route('home');
        }
        else {
            return redirect()->route('login');
        }
    }
}
