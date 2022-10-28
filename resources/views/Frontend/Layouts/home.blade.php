@extends('Frontend.Layouts.master')
@section('body')
<div class="banner">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('public/Frontend/images/slider')}}/slide1.webp" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('public/Frontend/images/slider')}}/slide2.webp" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('public/Frontend/images/slider')}}/slide3.webp" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('public/Frontend/images/slider')}}/slide4.webp" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('public/Frontend/images/slider')}}/slide5.webp" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div>

{{-- product categoreys --}}
<div class="categorey_area">
    <div class="section-title">
        <b>Popular Categorey</b>
    </div>
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-2 col-md-3 col-6">
                <a href="#" class="cat">
                    <div class="categorey_single">
                        <div class="item_image">
                            <img src="{{asset('public/Frontend/images/cat')}}/1.png" alt="" class="img-fluid">
                        </div>
                        <div class="title">
                            <b>dairy</b>
                        </div>
                        <div class="quantity">
                            <span>5 Products</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <a href="#" class="cat">
                    <div class="categorey_single">
                        <div class="item_image">
                            <img src="{{asset('public/Frontend/images/cat')}}/2.png" alt="" class="img-fluid">
                        </div>
                        <div class="title">
                            <b>dairy</b>
                        </div>
                        <div class="quantity">
                            <span>5 Products</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <a href="#" class="cat">
                    <div class="categorey_single">
                        <div class="item_image">
                            <img src="{{asset('public/Frontend/images/cat')}}/3.png" alt="" class="img-fluid">
                        </div>
                        <div class="title">
                            <b>dairy</b>
                        </div>
                        <div class="quantity">
                            <span>5 Products</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <a href="#" class="cat">
                    <div class="categorey_single">
                        <div class="item_image">
                            <img src="{{asset('public/Frontend/images/cat')}}/4.png" alt="" class="img-fluid">
                        </div>
                        <div class="title">
                            <b>dairy</b>
                        </div>
                        <div class="quantity">
                            <span>5 Products</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <a href="#" class="cat">
                    <div class="categorey_single">
                        <div class="item_image">
                            <img src="{{asset('public/Frontend/images/cat')}}/5.png" alt="" class="img-fluid">
                        </div>
                        <div class="title">
                            <b>dairy</b>
                        </div>
                        <div class="quantity">
                            <span>5 Products</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <a href="#" class="cat">
                    <div class="categorey_single">
                        <div class="item_image">
                            <img src="{{asset('public/Frontend/images/cat')}}/6.png" alt="" class="img-fluid">
                        </div>
                        <div class="title">
                            <b>dairy</b>
                        </div>
                        <div class="quantity">
                            <span>5 Products</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <a href="#" class="cat">
                    <div class="categorey_single">
                        <div class="item_image">
                            <img src="{{asset('public/Frontend/images/cat')}}/7.png" alt="" class="img-fluid">
                        </div>
                        <div class="title">
                            <b>dairy</b>
                        </div>
                        <div class="quantity">
                            <span>5 Products</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <a href="#" class="cat">
                    <div class="categorey_single">
                        <div class="item_image">
                            <img src="{{asset('public/Frontend/images/cat')}}/8.png" alt="" class="img-fluid">
                        </div>
                        <div class="title">
                            <b>dairy</b>
                        </div>
                        <div class="quantity">
                            <span>5 Products</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <a href="#" class="cat">
                    <div class="categorey_single">
                        <div class="item_image">
                            <img src="{{asset('public/Frontend/images/cat')}}/9.png" alt="" class="img-fluid">
                        </div>
                        <div class="title">
                            <b>dairy</b>
                        </div>
                        <div class="quantity">
                            <span>5 Products</span>
                        </div>
                    </div>
                </a>
            </div>
            
        </div>
    </div>
</div>
{{-- product categoreys --}}


{{-- new products --}}
<div class="products">
    <div class="section-title">
        <b>New Products</b>
    </div>
    <div class="container">
        <div uk-slider="autoplay: true" class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
                <li>
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
                        <a href="{{url('/product_single')}}" class="cat">
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
                </li>
            </ul>
        
            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
        
        </div>
    </div>
</div>
{{-- new products --}}
{{-- new products --}}
<div class="products">
    <div class="section-title">
        <b>Popular Products</b>
    </div>
    <div class="container">
        <div uk-slider="autoplay: true" class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
                <li>
                    <div class="product-single-box">
                        <div class="badge badge-success" id="newtag">
                            <b>NEW</b>
                        </div>
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
                            <a href="#"><span class="button-text">Add To Cart</span> <i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </li>
            </ul>
        
            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
        
        </div>
    </div>
</div>
{{-- new products --}}
{{-- new products --}}
<div class="products">
    <div class="section-title">
        <b>Our Latest Blogs</b>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="blog-single">
                    <div class="blog-image">
                        <img src="{{asset('public/Frontend/images/blog')}}/1.jpeg" alt="" class="img-fluid">
                        <div class="hover-text">
                            <span>Date</span>
                            <p>Blog Text</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="blog-single">
                    <div class="blog-image">
                        <img src="{{asset('public/Frontend/images/blog')}}/2.jpeg" alt="" class="img-fluid">
                        <div class="hover-text">
                            <span>Date</span>
                            <p>Blog Text</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="blog-single">
                    <div class="blog-image">
                        <img src="{{asset('public/Frontend/images/blog')}}/3.jpg" alt="" class="img-fluid">
                        <div class="hover-text">
                            <span>Date</span>
                            <p>Blog Text</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- new products --}}
@endsection