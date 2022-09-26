<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Porto - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.png">

    <script>
        WebFontConfig = {
            google: { families: [ 'Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700' ] }
        };
        ( function ( d ) {
            var wf = d.createElement( 'script' ), s = d.scripts[ 0 ];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore( wf, s );
        } )( document );
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/demo3.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
</head>

<body class="full-screen-slider">
    <div class="page-wrapper">
        <header class="header header-transparent">
            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler" type="button">
                            <i class="fas fa-bars"></i>
                        </button>

                        <a href="demo3.html" class="logo">
                            <img src="assets/images/logo-black.png" alt="Porto Logo">
                        </a>

                        <nav class="main-nav font2">
                            <ul class="menu">
                                <li class="active">
                                    <a href="demo3.html">Home</a>
                                </li>
                                <li>
                                    <a href="demo3-shop.html">Categories</a>
                                    <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <a href="#" class="nolink">VARIATION 1</a>
                                                <ul class="submenu">
                                                    @foreach ($categories as $category)
                                                        <li><a href="{{ route('category.show', $category['id']) }}">{{ $category['name'] }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- End .megamenu -->
                                </li>
                            </ul>
                        </nav>
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <div class="header-search header-search-popup header-search-category d-none d-sm-block">
                            <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="q" id="q"
                                        placeholder="I'm searching for..." required="">
                                    <div class="select-custom">
                                        <select id="cat" name="cat">
                                            <option value="">All Categories</option>
                                        </select>
                                    </div><!-- End .select-custom -->
                                    <button class="btn text-dark icon-magnifier" type="submit"></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div>

                        <a href="{{ route('login') }}" class="header-icon header-icon-user" title="Login">
                            <i class="icon-user-2"></i>
                        </a>

                        @auth

                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle dropdown-arrow cart-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-cart-thick"></i>
                                <span class="cart-count badge-circle">3</span>
                            </a>

                            <div class="cart-overlay"></div>

                            <div class="dropdown-menu mobile-cart">
                                <a href="#" title="Close (Esc)" class="btn-close">×</a>

                                <div class="dropdownmenu-wrapper custom-scrollbar">
                                    <div class="dropdown-cart-header">Shopping Cart</div>
                                    <!-- End .dropdown-cart-header -->

                                    <div class="dropdown-cart-products">
                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="demo3-product.html">Ultimate 3D Bluetooth Speaker</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    × $99.00
                                                </span>
                                            </div><!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="demo3-product.html" class="product-image">
                                                    <img src="assets/images/products/product-1.jpg" alt="product"
                                                        width="80" height="80">
                                                </a>

                                                <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                            </figure>
                                        </div><!-- End .product -->

                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="demo3-product.html">Brown Women Casual HandBag</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    × $35.00
                                                </span>
                                            </div><!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="demo3-product.html" class="product-image">
                                                    <img src="assets/images/products/product-2.jpg" alt="product"
                                                        width="80" height="80">
                                                </a>

                                                <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                            </figure>
                                        </div><!-- End .product -->

                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="demo3-product.html">Circled Ultimate 3D Speaker</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    × $35.00
                                                </span>
                                            </div><!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="demo3-product.html" class="product-image">
                                                    <img src="assets/images/products/product-3.jpg" alt="product"
                                                        width="80" height="80">
                                                </a>
                                                <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                            </figure>
                                        </div><!-- End .product -->
                                    </div><!-- End .cart-product -->

                                    <div class="dropdown-cart-total">
                                        <span>SUBTOTAL:</span>

                                        <span class="cart-total-price float-right">$134.00</span>
                                    </div><!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="cart.html" class="btn btn-gray btn-block view-cart">View
                                            Cart</a>
                                        <a href="checkout.html" class="btn btn-dark btn-block">Checkout</a>
                                    </div><!-- End .dropdown-cart-total -->
                                </div><!-- End .dropdownmenu-wrapper -->
                            </div><!-- End .dropdown-menu -->
                        </div>

                        @endauth
                    </div>
                </div>
            </div>
        </header>

        @yield('application')

        <footer class="footer">
            <div class="container">
                <div class="footer-top top-border d-flex align-items-center justify-content-between flex-wrap">
                    <div class="footer-left widget-newsletter d-md-flex align-items-center">
                        <div class="widget-newsletter-info">
                            <h5 class="widget-newsletter-title text-uppercase m-b-1">subscribe newsletter</h5>
                            <p class="widget-newsletter-content mb-0">Get all the latest information on Events, Sales
                                and Offers.</p>
                        </div>
                        <form action="#">
                            <div class="footer-submit-wrapper d-flex">
                                <input type="email" class="form-control" placeholder="Email address..." size="40"
                                    required>
                                <button type="submit" class="btn btn-dark btn-sm">Subscribe</button>
                            </div>
                        </form>
                    </div>
                    <div class="footer-right">
                        <div class="social-icons">
                            <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"></a>
                            <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
                            <a href="#" class="social-icon social-instagram icon-instagram" target="_blank"></a>
                        </div><!-- End .social-icons -->
                    </div>
                </div>

                <div class="footer-middle">
                    <div class="row">
                        <div class="col-lg-6 col-xl-4">
                            <div class="widget">
                                <h4 class="widget-title">Contact Info</h4>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="contact-widget">
                                            <h4 class="widget-title">ADDRESS:</h4>
                                            <a href="#">1234 Street Name, City, England</a>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 pl-xl-0">
                                        <div class="contact-widget">
                                            <h4 class="widget-title">PHONE:</h4>
                                            <a href="#">(123) 456-7890</a>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="contact-widget email">
                                            <h4 class="widget-title">EMAIL:</h4>
                                            <a href="mailto:mail@example.com">mail@example.com</a>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 pl-xl-0">
                                        <div class="contact-widget">
                                            <h4 class="widget-title">WORKING DAYS/HOURS:</h4>
                                            <a href="#">Mon - Sun / 9:00 AM - 8:00 PM</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 col-xl-4">
                            <div class="widget">
                                <h4 class="widget-title">My Account</h4>
                                <div class="links link-parts row">
                                    <ul class="link-part col-xl-4 mb-0">
                                        <li><a href="demo3-about.html">About Us</a></li>
                                        <li><a href="demo3-contact.html">Contact Us</a></li>
                                        <li><a href="dashboard.html">My Account</a></li>
                                    </ul>
                                </div>
                            </div><!-- End .widget -->
                        </div>
                    </div>
                </div>

                <div class="footer-bottom d-sm-flex align-items-center">
                    <div class="footer-left">
                        <span class="footer-copyright">Porto eCommerce. © 2021. All Rights Reserved</span>
                    </div>

                    <div class="footer-right ml-auto mt-1 mt-sm-0">
                        <div class="payment-icons mr-0">
                            <span class="payment-icon visa"
                                style="background-image: url(assets/images/payments/payment-visa.svg)"></span>
                            <span class="payment-icon paypal"
                                style="background-image: url(assets/images/payments/payment-paypal.svg)"></span>
                            <span class="payment-icon stripe"
                                style="background-image: url(assets/images/payments/payment-stripe.png)"></span>
                            <span class="payment-icon verisign"
                                style="background-image:  url(assets/images/payments/payment-verisign.svg)"></span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div class="mobile-menu-overlay"></div>

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li><a href="demo3.html">Home</a></li>
                    <li>
                        <a href="demo3-shop.html">Categories</a>
                        <ul>
                            <li><a href="category.html">Full Width Banner</a></li>
                            <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                            <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                            <li><a href="category-sidebar-left.html">Left Sidebar</a></li>
                            <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                            <li><a href="category-off-canvas.html">Off Canvas Filter</a></li>
                            <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                            <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                            <li><a href="#">List Types</a></li>
                            <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span
                                        class="tip tip-new">New</span></a></li>
                            <li><a href="category.html">3 Columns Products</a></li>
                            <li><a href="category-4col.html">4 Columns Products</a></li>
                            <li><a href="category-5col.html">5 Columns Products</a></li>
                            <li><a href="category-6col.html">6 Columns Products</a></li>
                            <li><a href="category-7col.html">7 Columns Products</a></li>
                            <li><a href="category-8col.html">8 Columns Products</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="mobile-menu">
                    @auth
                        <li><a href="">My Account</a></li>
                    @endauth
                    <li><a href="demo3-contact.html">Contact Us</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="{{ route('login') }}" class="login-link">Log In</a></li>
                </ul>
            </nav>

            <form class="search-wrapper mb-2" action="#">
                <input type="text" class="form-control mb-0" placeholder="Search..." required />
                <button class="btn icon-search text-white bg-transparent p-0" type="submit"></button>
            </form>

            <div class="social-icons">
                <a href="#" class="social-icon social-facebook icon-facebook" target="_blank">
                </a>
                <a href="#" class="social-icon social-twitter icon-twitter" target="_blank">
                </a>
                <a href="#" class="social-icon social-instagram icon-instagram" target="_blank">
                </a>
            </div>
        </div>
    </div>

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>
</body>

</html>
