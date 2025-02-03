@extends('layouts.frontend.app')

@section('content')
    <div class="breadcrumb-area bg-img" data-bg="assets/img/banner/breadcrumb-banner.jpg"
        style="background-image: url(&quot;assets/img/banner/breadcrumb-banner.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap text-center">
                        <nav aria-label="breadcrumb">
                            <h1 class="breadcrumb-title">shop</h1>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="shop.html">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product-details-wrapper section-padding">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider mb-20 slick-initialized slick-slider">
                                    <div class="slick-list draggable">
                                        <div class="slick-track" style="opacity: 1; width: 1480px;">
                                            <div class="pro-large-img img-zoom slick-slide slick-current slick-active"
                                                data-slick-index="0" aria-hidden="false" tabindex="0"
                                                style="width: 370px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1; overflow: hidden;">
                                                <img src="{{ asset($product->image_url) }}" alt="{{ $product->name }}">
                                                <img role="presentation" alt=""
                                                    src="http://127.0.0.1:5500/assets/img/product/product-details-img1.jpg"
                                                    class="zoomImg"
                                                    style="position: absolute; top: -5.90684px; left: -253.117px; opacity: 0; width: 800px; height: 830px; border: none; max-width: none; max-height: none;">
                                            </div>
                                            <div class="pro-large-img img-zoom slick-slide" data-slick-index="1"
                                                aria-hidden="true" tabindex="-1"
                                                style="width: 370px; position: relative; left: -370px; top: 0px; z-index: 998; opacity: 0; overflow: hidden;">
                                                <img src="assets/img/product/product-details-img2.jpg" alt="">
                                                <img role="presentation" alt=""
                                                    src="http://127.0.0.1:5500/assets/img/product/product-details-img2.jpg"
                                                    class="zoomImg"
                                                    style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 800px; height: 830px; border: none; max-width: none; max-height: none;">
                                            </div>
                                            <div class="pro-large-img img-zoom slick-slide" data-slick-index="2"
                                                aria-hidden="true" tabindex="-1"
                                                style="width: 370px; position: relative; left: -740px; top: 0px; z-index: 998; opacity: 0; overflow: hidden;">
                                                <img src="assets/img/product/product-details-img3.jpg" alt="">
                                                <img role="presentation" alt=""
                                                    src="http://127.0.0.1:5500/assets/img/product/product-details-img3.jpg"
                                                    class="zoomImg"
                                                    style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 800px; height: 830px; border: none; max-width: none; max-height: none;">
                                            </div>
                                            <div class="pro-large-img img-zoom slick-slide" data-slick-index="3"
                                                aria-hidden="true" tabindex="-1"
                                                style="width: 370px; position: relative; left: -1110px; top: 0px; z-index: 998; opacity: 0; overflow: hidden;">
                                                <img src="assets/img/product/product-details-img4.jpg" alt="">
                                                <img role="presentation" alt=""
                                                    src="http://127.0.0.1:5500/assets/img/product/product-details-img4.jpg"
                                                    class="zoomImg"
                                                    style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 800px; height: 830px; border: none; max-width: none; max-height: none;">
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <div class="pro-nav slick-row-5 slick-initialized slick-slider">
                                    <div class="slick-list draggable">
                                        <div class="slick-track"
                                            style="opacity: 1; width: 380px; transform: translate3d(0px, 0px, 0px);">
                                            <div class="pro-nav-thumb slick-slide slick-current slick-active"
                                                data-slick-index="0" aria-hidden="false" tabindex="0"
                                                style="width: 85px;"><img src="assets/img/product/product-details-img1.jpg"
                                                    alt=""></div>
                                            <div class="pro-nav-thumb slick-slide slick-active" data-slick-index="1"
                                                aria-hidden="false" tabindex="0" style="width: 85px;"><img
                                                    src="assets/img/product/product-details-img2.jpg" alt=""></div>
                                            <div class="pro-nav-thumb slick-slide slick-active" data-slick-index="2"
                                                aria-hidden="false" tabindex="0" style="width: 85px;"><img
                                                    src="assets/img/product/product-details-img3.jpg" alt=""></div>
                                            <div class="pro-nav-thumb slick-slide slick-active" data-slick-index="3"
                                                aria-hidden="false" tabindex="0" style="width: 85px;"><img
                                                    src="assets/img/product/product-details-img4.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-des">
                                    <h3 class="pro-det-title">{{ $product->name }}</h3>
                                    <div class="pro-review">
                                        <span><a href="#">1 Review(s)</a></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">${{ $product->price }}</span>
                                        <span class="old-price"><del>${{ $product->price + 50 }}</del></span>
                                    </div>
                                    <p>
                                        {{ $product->description }}
                                    </p>
                                    <div class="quantity-cart-box d-flex align-items-center mb-20">
                                        <div class="quantity">
                                            <div class="pro-qty"><span class="dec qtybtn">-</span><input type="text"
                                                    value="1"><span class="inc qtybtn">+</span></div>
                                        </div>
                                        <a href="cart.html" class="btn btn-default">Add To Cart</a>
                                    </div>
                                    <div class="availability mb-20">
                                        <h5 class="cat-title">Availability:</h5>
                                        @if ($product->stock_quantity >0)
                                        <span>In Stock - <br> </span>
                                        @else
                                        <span>Out of Stock </span>
                                        @endif
                                        
                                    <div class="share-icon">
                                        <h5 class="cat-title">Share:</h5>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details inner end -->

                    <!-- product details reviews start -->
                    <div class="product-details-reviews section-padding">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="product-review-info">
                                    <ul class="nav review-tab">
                                        <li>
                                            <a class="active show" data-toggle="tab" href="#tab_one">description</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#tab_two" class="">information</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#tab_three" class="">reviews</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content reviews-tab">
                                        <div class="tab-pane fade active show" id="tab_one">
                                            <div class="tab-one">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla
                                                    augue nec est tristique auctor. Ipsum metus feugiat sem, quis fermentum
                                                    turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa
                                                    massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero
                                                    hendrerit est, sed commodo augue nisi non neque.</p>
                                                <div class="review-description">
                                                    <div class="tab-thumb">
                                                        <img src="{{ asset($product->image_url) }}" alt="{{ $product->name }}">
                                                    </div>
                                                    <div class="tab-des">
                                                        <h3>Product Information :</h3>
                                                        <ul>
                                                            <li>Donec non est at libero vulputate rutrum</li>
                                                            <li>Morbi ornare lectus quis justo gravida</li>
                                                            <li>Pellentesque aliquet, sem eget laoreet</li>
                                                            <li>Donec a neque libero</li>
                                                            <li>Pellentesque aliquet, sem eget laoreet</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p>Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida
                                                    vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant
                                                    morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                                    Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat.
                                                    Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis,
                                                    a dapibus enim lorem nec augue. Nunc facilisis sagittis ullamcorper.</p>
                                                <p>Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed
                                                    et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et
                                                    ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus
                                                    adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada
                                                    tincidunt.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab_two">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td>color</td>
                                                        <td>black, blue, red</td>
                                                    </tr>
                                                    <tr>
                                                        <td>size</td>
                                                        <td>L, M, S</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="tab_three">
                                            <form action="#" class="review-form">
                                                <h5>1 review for <span>Chaz Kangeroo Hoodies</span></h5>
                                                <div class="total-reviews">
                                                    <div class="rev-avatar">
                                                        <img src="{{ asset($product->image_url) }}" alt="{{ $product->name }}"  >
                                                    </div>
                                                    <div class="review-box">
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                        </div>
                                                        <div class="post-author">
                                                            <p><span>admin -</span> 30 Nov, 2018</p>
                                                        </div>
                                                        <p>Aliquam fringilla euismod risus ac bibendum. Sed sit amet sem
                                                            varius ante feugiat lacinia. Nunc ipsum nulla, vulputate ut
                                                            venenatis vitae, malesuada ut mi. Quisque iaculis, dui congue
                                                            placerat pretium, augue erat accumsan lacus</p>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span class="text-danger">*</span>
                                                            Your Name</label>
                                                        <input type="text" class="form-control" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span class="text-danger">*</span>
                                                            Your Email</label>
                                                        <input type="email" class="form-control" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span class="text-danger">*</span>
                                                            Your Review</label>
                                                        <textarea class="form-control" required=""></textarea>
                                                        <div class="help-block pt-10"><span
                                                                class="text-danger">Note:</span> HTML is not translated!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span class="text-danger">*</span>
                                                            Rating</label>
                                                        &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                                        <input type="radio" value="1" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="2" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="3" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="4" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="5" name="rating"
                                                            checked="">
                                                        &nbsp;Good
                                                    </div>
                                                </div>
                                                <div class="buttons">
                                                    <button class="sqr-btn" type="submit">Continue</button>
                                                </div>
                                            </form> <!-- end of review-form -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details reviews end -->

                    <!-- featured product area start -->
                    <section class="Related-product">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-title text-center">
                                        <h2 class="title">Related Product</h2>
                                        {{-- <p class="sub-title">Lorem ipsum dolor sit amet consectetur adipisicing</p> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div
                                        class="product-carousel-4 mbn-50 slick-row-15 slick-arrow-style slick-initialized slick-slider">
                                        <button type="button" class="slick-prev slick-arrow" style=""><i
                                                class="fa fa-angle-left"></i></button>

                                        <div class="slick-list draggable">
                                            <div class="slick-track"
                                                style="opacity: 1; width: 4030px; transform: translate3d(-930px, 0px, 0px);">
                                                @foreach ($related as $item)
                                                <div class="product-content">
                                                 @include('components.front-product', ['product' => $item])
                                                </div>
                                                @endforeach
                                                
                                                  
                                                
                                            </div>
                                        </div><button type="button" class="slick-next slick-arrow" style=""><i
                                                class="fa fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- featured product area end -->
                </div>
            </div>
        </div>
    </div>
@endsection
