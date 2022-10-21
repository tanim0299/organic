@extends('Frontend.Layouts.master')
@section('body')
<div class="background-banner">
    <div class="banner-single">
        <div class="container">
            <div class="banner-title">
                <b>Products</b>
            </div>
            <div class="items">
                <div class="products-itmes">
                    <ul>
                        <li><a href="#">Item 1 <br><span>7 Products</span></a>
                            <div class="dropdown-categorey">
                                <ul>
                                    <li><a href="#">Categorey 1 <br><span>1 Products</span></a></li>
                                    <li><a href="#">Categorey 1 <br><span>1 Products</span></a></li>
                                    <li><a href="#">Categorey 1 <br><span>1 Products</span></a></li>
                                    <li><a href="#">Categorey 1 <br><span>1 Products</span></a></li>
                                    <li><a href="#">Categorey 1 <br><span>1 Products</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Item 1 <br><span>7 Products</span></a></li>
                        <li><a href="#">Item 1 <br><span>7 Products</span></a></li>
                        <li><a href="#">Item 1 <br><span>7 Products</span></a></li>
                        <li><a href="#">Item 1 <br><span>7 Products</span></a></li>
                        <li><a href="#">Item 1 <br><span>7 Products</span></a></li>
                        <li><a href="#">Item 1 <br><span>7 Products</span></a></li>
                        <li><a href="#">Item 1 <br><span>7 Products</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="prouducts-area container">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-6">
            <div class="product-single-box">
                <div class="badge badge-warning" id="discounttag">
                    <b>-10%</b>
                </div>
                <!-- This is a button toggling the modal -->
                    <button id="quick_view" class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #modal-example"><i class="fa fa-search"></i></button>

                    <!-- This is an anchor toggling the modal -->
                    {{-- <a href="#modal-example" uk-toggle>Open</a> --}}

                    <!-- This is the modal -->
                    <div id="modal-example" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body">
                            <div class="row">
                                <div class="col-lg-5 col-12">
                                    <div class="images">
                                        <img src="{{asset('public/Frontend/images/product')}}/1.webp" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-7 col-12">
                                    <div class="product_name" id="modal_name">
                                        <b>Product Name</b>
                                    </div>
                                    <div class="weight" id="modal_weight">
                                        <span class="badge badge-info">5kg</span>
                                    </div>
                                    <div class="price" id="modal_price">
                                        <span>500/-</span>
                                    </div>
                                    <div class="quantity">
                                        <label>Quantity</label>
                                        <input type="number" class="form-control col-6" value="1">
                                    </div>
                                    <div class="cart-btn">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                    <div class="others_info">
                                        <b>SKU : </b> <span>Text....</span><br>
                                        <b>Weight : </b> <span>Text....</span><br>
                                        <b>Categorey : </b> <span>Text....</span><br>
                                        <b>Tag : </b> <span>Text....</span><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <a href="#" class="cat">
                    <div class="image">
                        <img src="{{asset('public/Frontend/images/product')}}/1.webp" alt="" class="img-fluid">
                    </div>
                    <div class="name">
                        <b>Product Name</b>
                    </div>
                    <div class="weight">
                        <span class="badge badge-info">5kg</span>
                    </div>
                    <div class="price">
                        <span>500/-</span>
                    </div>
                </a>
                <div class="cart-btns">
                    <a href="#"><span class="button-text">Add To Cart</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection