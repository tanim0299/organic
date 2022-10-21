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
                        <li><i class="fa fa-chevron-right"></i></li>
                        <li><a href="#">Checkout</a></li>
                        <li><i class="fa fa-chevron-right"></i></li>
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
            <div class="col-lg-9 col-md-9 col-12">
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
        </div>
    </div>
</div>
@endsection