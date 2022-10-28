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
    public function checkout()
    {
        return view('Frontend.User.checkout');
    }
    public function confirm_order()
    {
        return view('Frontend.User.order_complete');
    }
    public function product_single()
    {
        return view('Frontend.User.product_single');
    }
}
