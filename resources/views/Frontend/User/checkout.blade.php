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
                        <li style="border-bottom:2px solid #83b735;"><a href="{{url('/checkout')}}">Checkout</a></li>
                        <li><i class="fa fa-chevron-right" style="color: white;"></i></li>
                        <li><span>Order Complete</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="prouducts-area container">
    <div class="order-system">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="billilng_details">
                    <div class="bill-input-single">
                        <label>Name</label><span>*</span>
                        <input type="text" class="form-control" placeholder="Place Your Name">
                    </div>
                    <div class="bill-input-single">
                        <label>Division</label><span>*</span>
                        <select class="form-control">
                            <option>Select One</option>
                        </select>
                    </div>
                    <div class="bill-input-single">
                        <label>District</label><span>*</span>
                        <select class="form-control">
                            <option>Select One</option>
                        </select>
                    </div>
                    <div class="bill-input-single">
                        <label>Upazila</label><span>*</span>
                        <select class="form-control">
                            <option>Select One</option>
                        </select>
                    </div>
                    <div class="bill-input-single">
                        <label>Address</label><span>*</span>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="bill-input-single">
                        <label>Mobile</label><span>*</span>
                        <input type="text" class="form-control" placeholder="Place Your Name">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="order-box">
                    <div class="box-title">
                        <b>Your Order</b>
                    </div>
                    <div class="your-order mt-4">
                        <table class="table bg-white">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th style="text-align: right">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Khaas Firni Mix  × 1</td>
                                    <td style="text-align: right">250/-</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold">Subtotal</td>
                                    <td style="text-align: right;font-weight:bold">250/-</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold">Shipping</td>
                                    <td style="text-align: right;font-weight:bold">250/-</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;font-size:20px">Total</td>
                                    <td style="text-align: right;font-weight:bold;font-size:20px">250/-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="checkout-link">
                        <a class="btn-block" href="{{url('/confirm_order')}}">Place Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection