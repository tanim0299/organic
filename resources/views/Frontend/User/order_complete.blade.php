@extends('Frontend.Layouts.master')
@section('body')
<div class="background-banner">
    <div class="banner-single">
        <div class="container">
            <div class="banner-title">
                <b>Order Processing</b>
            </div>
            <div class="items">
                <div class="products-itmes">
                    <ul>
                        <li><span>Shopping Cart </span></li>
                        <li><i class="fa fa-chevron-right" style="color: white;"></i></li>
                        <li><span>Checkout</span></li>
                        <li><i class="fa fa-chevron-right" style="color: white;"></i></li>
                        <li style="border-bottom:2px solid #83b735;"><a href="{{url('/confirm_order')}}">Order Complete</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="prouducts-area container">
    <div class="row justify-content-center text-center">
        <div class="col-lg-8 col-md-8 col-12">
            <div class="order-box">
                <div class="heading">
                    <b>Khassfood Online Shopping</b><br>
                    <span>Your Order Invoice</span>
                </div>
                <div class="billing-title">
                    <b>Billing Info</b>
                </div>
                <div class="billing_info">
                    <b>Name :</b> <span>Sumsul Karim Chowdhury</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection