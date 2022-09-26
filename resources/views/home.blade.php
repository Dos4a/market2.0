@extends('layouts.application')

@section('application')

<main class="main">


    <section class="container">
        <h2 class="section-title ls-n-15 text-center pt-2 m-b-4">Shop By Category</h2>

        <div class="owl-carousel owl-theme nav-image-center show-nav-hover nav-outer cats-slider appear-animate"
            data-animation-name="fadeInUpShorter" data-animation-delay="200" data-animation-duration="1000">

            @foreach ($categories as $category)
                <div class="product-category">
                    <a href="{{ route('category.show', $category['id']) }}">
                        <figure>
                            <img src="{{ $category['preview_image'] }}" width="273" height="273"
                            alt="category" />
                        </figure>
                        <div class="category-content">
                            <h3>{{ $category['name'] }}</h3>
                            <span><mark class="count">8</mark> products</span>
                        </div>
                    </a>
                </div>

            @endforeach
        </div>
    </section>


    <section class="container pb-3 mb-1">
        <h2 class="section-title ls-n-15 text-center pb-2 m-b-4">Popular Products</h2>

        <div class="row py-4">
            @foreach ($products as $product)
                <div class="col-6 col-sm-4 col-md-3 col-xl-2 appear-animate" data-animation-name="fadeIn"
                    data-animation-delay="300" data-animation-duration="1000">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="demo3-product.html">
                                {{-- <img src="{{ $product->images->url }}" width="273"
                                    height="273" alt="productr" /> --}}
                            </a>
                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="demo3-shop.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="demo3-product.html">{{ $product->categories->name }}</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div>
            @endforeach
        </div>

    </section>
</main><!-- End .main -->

@endsection
