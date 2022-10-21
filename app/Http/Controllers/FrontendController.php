<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('Frontend.Layouts.home');
    }

    public function products()
    {
        return view('Frontend.User.products');
    }
    public function cart()
    {
        return view('Frontend.User.cart');
    }
}
