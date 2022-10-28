<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Organic Food Website</title>
    <link rel="stylesheet" href="{{asset('public/Frontend/css')}}/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    {{-- font awsome  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/brands.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/regular.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/solid.min.css">
    {{-- font awsome  --}}

    {{-- ui kit --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/css/uikit.min.css" />
    {{-- ui kit --}}

    {{-- lens --}}
    {{-- <link rel="stylesheet" href="{{asset('public/Lens')}}/css/normalize.css" />
    <link rel="stylesheet" href="{{asset('public/Lens')}}/css/foundation.css" />
    <link rel="stylesheet" href="{{asset('public/Lens')}}/css/demo.css" /> --}}
    <script src="{{asset('public/Lens')}}/js/vendor/modernizr.js"></script>
    <script src="{{asset('public/Lens')}}/js/vendor/jquery.js"></script>
    <!-- xzoom plugin here -->
    <script type="text/javascript" src="{{asset('public/Lens')}}/dist/xzoom.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('public/Lens')}}/dist/xzoom.css" media="all" /> 
    <!-- hammer plugin here -->
    <script type="text/javascript" src="{{asset('public/Lens')}}/hammer.js/1.0.5/jquery.hammer.min.js"></script>  
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link type="text/css" rel="stylesheet" media="all" href="{{asset('public/Lens')}}/fancybox/source/jquery.fancybox.css" />
    <link type="text/css" rel="stylesheet" media="all" href="{{asset('public/Lens')}}/magnific-popup/css/magnific-popup.css" />
    <script type="text/javascript" src="{{asset('public/Lens')}}/fancybox/source/jquery.fancybox.js"></script>
    <script type="text/javascript" src="{{asset('public/Lens')}}/magnific-popup/js/magnific-popup.js"></script>      
</head>
<style type="text/css">
    

    

    </style>
<body>
    <header id="header-area">
        {{-- top header area --}}
        <div class="top-header">
            <div class="container">
                <div class="links">
                    <ul>
                        <li><a href="{{url('/gift_card')}}">Gift Card</a></li>
                        <li><a href="{{url('/howto_order')}}">How To Order</a></li>
                        <li><a href="{{url('/faq')}}">FAQs</a></li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- top header area --}}

        {{-- logo header area --}}
        <div class="logo-header">
            <div class="container">
                <div class="row">
                    <div class="col-2" id="mobile-bars">
                        <button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #offcanvas-usage"><i class="fa fa-bars"></i></button>


                        <div id="offcanvas-usage" uk-offcanvas>
                            <div class="uk-offcanvas-bar">

                                <button class="uk-offcanvas-close" type="button" uk-close></button>

                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                      <button class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Categorey</button>
                                    </li>
                                    <li class="nav-item">
                                      <button class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Menu</button>
                                    </li>
                                  </ul>
                                  {{-- categoreys --}}
                                  <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                        <div class="cat-mobile">
                                            <div class="cat-single">
                                                <li>
                                                    <a href="#">Honey</a> <i class="fa fa-chevron-right"></i>
                                                </li>
                                                <div class="categorey-mob">
                                                    <ul>
                                                        <li><a href="#">Natural Honey</a><i class="fa fa-chevron-right"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="cat-single">
                                                <li>
                                                    <a href="#">Honey</a> <i class="fa fa-chevron-right"></i>
                                                </li>
                                                <div class="categorey-mob">
                                                    <ul>
                                                        <li><a href="#">Natural Honey</a><i class="fa fa-chevron-right"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    {{-- categoreys --}}

                                    {{-- menus --}}
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                                        <div class="cat-mobile">
                                            <div class="cat-single">
                                                <li>
                                                    <a href="#">Home</a> <i class="fa fa-chevron-right"></i>
                                                </li>
                                            </div>
                                            <div class="cat-single">
                                                <li>
                                                    <a href="{{url('/products')}}">Products</a> <i class="fa fa-chevron-right"></i>
                                                </li>
                                            </div>
                                            {{-- <div class="cat-single">
                                                <li>
                                                    <a href="{{url('/shop')}}">Shop</a> <i class="fa fa-chevron-right"></i>
                                                </li>
                                            </div> --}}
                                            <div class="cat-single">
                                                <li>
                                                    <a href="{{url('/contact')}}">Contact</a> <i class="fa fa-chevron-right"></i>
                                                </li>
                                            </div>
                                            <div class="cat-single">
                                                <li>
                                                    <a href="{{url('/blog')}}">Blog</a> <i class="fa fa-chevron-right"></i>
                                                </li>
                                            </div>
                                        </div>

                                    </div>

                                    {{-- menus  --}}

                                  </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-10 col-8">
                        <div class="logo">
                            <img src="{{asset('public/Frontend/images')}}/logo.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-2" id="cart-mob">
                        <div class="carts">
                            <a href="#">
                                <img src="{{asset('public/Frontend/images')}}/cart.png" alt="" class="img-fluid">
                                <span class="count">0</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12" id="nav">
                        <div class="nav">
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('/products')}}">Products</a></li>
                                <li><a href="{{url('/contact_us')}}">Contact Us</a></li>
                                <li><a href="{{url('/blog')}}">Blog</a></li>
                                <li><a id="download_app" href="{{url('/app')}}">Download App</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-12" id="links">
                        <div class="social-links">
                            <ul>
                                <li><a id="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a id="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a id="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a id="youtube" href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                    <div class="">
                        <div class="uk-card uk-card-default uk-card-body uk-text-center uk-position-z-index" uk-sticky="">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-12" id="brwose-cat-d">
                            <div class="browse-cat">
                                <div class="cat-box">
                                    <div class="box-item">
                                        <i class="fa fa-bars"></i> <span>Browse Categorey</span> <i class="fa fa-chevron-down"></i>
                                    </div>
                                    <div class="dropdown-cat">
                                        <li><a href="#">Honey <i class="fa fa-chevron-right"></i></a>
                                        <div class="categorey_dropdown_s">
                                            <ul>
                                                <li><a href="#">Natural Honey <i class="fa fa-chevron-right"></i></a>
                                                <div class="sub_categorey_dropdow_s">
                                                    <ul>
                                                        <li><a href="#">Sub Categorey <i class="fa fa-chevron-right"></i></a></li>
                                                    </ul>
                                                </div>
                                                </li>
                                            </ul>
                                        </div>
                                        </li>
                                        <li><a href="#">Natural Beauty <i class="fa fa-chevron-right"></i></a></li>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="search-box">
                                <div class="input-group prepend">
                                    <input type="search" class="form-control" placeholder="What Are You Looking For..."> <i class="fa fa-search"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12" id="log-reg">
                            <div class="d-flex">
                                <div class="login-register">
                                    <a href="#">Login</a> / <a href="#">Register</a>
                                </div>
                                <div class="cart-box">
                                    <div class="carts">
                                        <a href="{{url('/cart')}}">
                                            <img src="{{asset('public/Frontend/images')}}/cart.png" alt="" class="img-fluid">
                                            <span class="count">0</span>
                                        </a>
                                    </div>
                                    <div class="carts-dropdown">
                                        <div class="single-product">
                                            <div class="d-flex">
                                                <div class="prod-image">
                                                    <img src="{{asset('public/Frontend/images')}}/prod1.webp" alt="" class="img-fluid">
                                                </div>
                                                <div class="prod-info">
                                                    <b>Product Name</b><br>
                                                    <span>1</span> <span>X</span> <span>250/-</span>
                                                </div>
                                                <div class="delete">
                                                    <a href="#" class="delete-btn">X</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="d-flex">
                                                <div class="prod-image">
                                                    <img src="{{asset('public/Frontend/images')}}/prod1.webp" alt="" class="img-fluid">
                                                </div>
                                                <div class="prod-info">
                                                    <b>Product Name</b><br>
                                                    <span>1</span> <span>X</span> <span>250/-</span>
                                                </div>
                                                <div class="delete">
                                                    <a href="#" class="delete-btn">X</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="title">
                                                <b>Sub Total : </b>
                                            </div>
                                            <div class="ammount">
                                                <b>250/-</b>
                                            </div>
                                        </div>
                                        <div class="button">
                                            <div class="checkout">
                                                <a href="#">Checkout</a>
                                            </div>
                                            <div class="cart">
                                                <a href="#">View Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        {{-- logo header area --}}
    </header>

    @yield('body')

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-logo">
                        <img src="{{asset('public/Frontend/images')}}/logo-white.png" alt="" class="img-fluid">
                    </div>
                    <div class="footer-text">
                        <span>Khaas Food is an e-commerce platform coupled with a chain of brick-and-mortar stores for safe and pure foods in Bangladesh.</span>
                    </div>
                    <div class="footer-links">
                        <ul>
                            <li><a id="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a id="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a id="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a id="youtube" href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-title">
                        <b>Contact Us</b>
                    </div>
                    <div class="address-box">
                        <b>Head Office : </b><br>
                        <span>Asadullah House, 5/1, Block- E, Lalmatia, Dhaka</span>
                    </div>
                    <div class="address-box">
                        <b>Phone : </b><br>
                        <span>+8801575434262</span>
                    </div>
                    <div class="address-box">
                        <b>Email : </b><br>
                        <span>tanimchy417@gmail.com</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-title">
                        <b>Usefull Links</b>
                    </div>
                    <div class="usefull-links">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Refund Policy</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    {{-- fantawsome  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/brands.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/fontawesome.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/regular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/solid.min.js"></script>
    {{-- fantawsome  --}}

    <!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit-icons.min.js"></script>
<script src="{{asset('public/Lens')}}/js/foundation.min.js"></script>
    <script src="{{asset('public/Lens')}}/js/setup.js"></script>
<script>
    $(".xzoom").xzoom();
</script>

</body>
</html>