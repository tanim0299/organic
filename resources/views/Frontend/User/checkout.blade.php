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
                        <li><a href="{{url('/cart')}}">Shopping Cart </a></li>
                        <li><i class="fa fa-chevron-right" style="color: white;"></i></li>
                        <li style="border-bottom:2px solid #83b735;"><a href="{{url('/checkout')}}">Checkout</a></li>
                        <li><i class="fa fa-chevron-right" style="color: white;"></i></li>
                        <li><a href="#">Order Complete</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="prouducts-area container">
    <div class="order-system">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-12">
                <div class="order-table">
                    <div class="table-responsive mt-4" id="order-table">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a id="delete_product" href="#">X</a></td>
                                    <td>Honey</td>
                                    <td>250/-</td>
                                    <td>
                                        <input type="number" class="form-control col-3" id="qunatity" value="1">
                                    </td>
                                    <td>250/-</td>
                                </tr>
                                <tr>
                                    <td><a id="delete_product" href="#">X</a></td>
                                    <td>Honey</td>
                                    <td>250/-</td>
                                    <td>
                                        <input type="number" class="form-control col-3" id="qunatity" value="1">
                                    </td>
                                    <td>250/-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="cart-total-box">
                    <div class="cart-heading">
                        <b>Cart Total</b>
                    </div>
                    <div class="line">
                        <div class="row">
                            <div class="col-8">
                                <b>Sub Total</b>
                            </div>
                            <div class="col-4">
                                <b>250/-</b>
                            </div>
                        </div>
                    </div>
                    <div class="line">
                        <div class="row">
                            <div class="col-8">
                                <b>Sub Total</b>
                            </div>
                            <div class="col-4">
                                <b>250/-</b>
                            </div>
                        </div>
                    </div>
                    <div class="line">
                        <div class="row">
                            <div class="col-8">
                                <b>Sub Total</b>
                            </div>
                            <div class="col-4">
                                <b>250/-</b>
                            </div>
                        </div>
                    </div>
                    <div class="checkout-link">
                        <a href="{{url('/checkout')}}">Proceed To Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection