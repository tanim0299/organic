@extends('Frontend.Layouts.master')
@section('body')
<style>
    .nav-link {
    padding: 5px;
    width: 172px;
    color: black !important;
    text-transform: uppercase;
}
</style>
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
        <div class="col-lg-6 col-12">
            <div class="product-images mt-5">
                <div class="row">
                    <div class="large-5 column">
                        <div class="xzoom-container">
                          <img class="xzoom3" src="{{asset('public/Lens')}}/images/gallery/preview/01_b_car.jpg" xoriginal="{{asset('public/Lens')}}/images/gallery/original/01_b_car.jpg" />
                          <div class="xzoom-thumbs">
                            <a href="{{asset('public/Lens')}}/images/gallery/original/01_b_car.jpg"><img class="xzoom-gallery3" width="80" src="{{asset('public/Lens')}}/images/gallery/thumbs/01_b_car.jpg"  xpreview="images/gallery/preview/01_b_car.jpg" title="The description goes here"></a>
                            <a href="{{asset('public/Lens')}}/images/gallery/original/02_o_car.jpg"><img class="xzoom-gallery3" width="80" src="{{asset('public/Lens')}}/images/gallery/preview/02_o_car.jpg" title="The description goes here"></a>
                            <a href="{{asset('public/Lens')}}/images/gallery/original/03_r_car.jpg"><img class="xzoom-gallery3" width="80" src="{{asset('public/Lens')}}/images/gallery/preview/03_r_car.jpg" title="The description goes here"></a>
                            <a href="{{asset('public/Lens')}}/images/gallery/original/04_g_car.jpg"><img class="xzoom-gallery3" width="80" src="{{asset('public/Lens')}}/images/gallery/preview/04_g_car.jpg" title="The description goes here"></a>
                          </div>
                        </div>        
                      </div>
                    <div class="large-7 column"></div>
                  </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="product-details">
                <div class="product-name">
                    <b>Khaas Halim Mix (হালিম মিক্স)</b>
                </div>
                <div class="product-price">
                    <b>55/-</b>
                </div>
                <div class="quantity">
                    <input type="number" class="form-control col-2">
                </div>
                <div class="cart-btn">
                    <a href="#">Add To Cart</a>
                </div>
                <div class="product-description">
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
    <div class="product-details-area">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Product Details</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
            </li> --}}
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
            {{-- <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div> --}}
          </div>
    </div>
</div>
@endsection