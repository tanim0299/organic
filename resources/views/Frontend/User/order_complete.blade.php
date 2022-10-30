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
            <div class="order-box-single">
                <div class="thanks-message">
                    <b>Thanks For Yor Order. Your Order Is Been Recived</b>
                </div>
                <div class="order-info">
                    <li>
                        <b>Order Number</b><br>
                        <span>1589756</span>
                    </li>
                    <li>
                        <b>Date</b><br>
                        <span>02/10/2022</span>
                    </li>
                    <li>
                        <b>Total Taka</b><br>
                        <span>2500/-</span>
                    </li>
                    <li>
                        <b>Payment Method</b><br>
                        <span>Cash On Delivery</span>
                    </li>
                </div>
                <div class="text-center mt-4">
                    <h3>Order Information</h3>
                </div>
                <div class="text-center mt-4">
                    <div class="order-detail">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Taka</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Amar Rice</td>
                                    <td>250/-</td>
                                </tr>
                                <tr>
                                    <td>Sub Total</td>
                                    <td>250/-</td>
                                </tr>
                                <tr>
                                    <td>Shipping</td>
                                    <td>30/- Abdullahpur</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>2280</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a href="#" class="btn btn-outline-danger btn-sm">Cancel Order</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection