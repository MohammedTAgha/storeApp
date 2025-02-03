@include('layouts.frontend.partials.header')
@include('layouts.frontend.partials.navbar')

<main>
    <!-- hero slider section start -->
    <section class="hero-slider">
        <div class="container">
            @yield('content')

        </div>
    </section>
</main>

{{-- <div class="modal " id="quick_view" style="padding-right: 15px; display: block;">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <!-- product details inner end -->
                <div class="product-details-inner">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="product-large-slider mb-20 slick-initialized slick-slider">
                                <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 2632px;"><div class="pro-large-img img-zoom slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 658px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1; overflow: hidden;">
                                    <img src="assets/img/product/product-details-img1.jpg" alt="product thumb">
                                <img role="presentation" alt="" src="http://127.0.0.1:5500/assets/img/product/product-details-img1.jpg" class="zoomImg" style="position: absolute; top: -46.4591px; left: -139.087px; opacity: 1; width: 800px; height: 830px; border: none; max-width: none; max-height: none;"></div><div class="pro-large-img img-zoom slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="width: 658px; position: relative; left: -658px; top: 0px; z-index: 998; opacity: 0; overflow: hidden;">
                                    <img src="assets/img/product/product-details-img2.jpg" alt="product thumb">
                                <img role="presentation" alt="" src="http://127.0.0.1:5500/assets/img/product/product-details-img2.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 800px; height: 830px; border: none; max-width: none; max-height: none;"></div><div class="pro-large-img img-zoom slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" style="width: 658px; position: relative; left: -1316px; top: 0px; z-index: 998; opacity: 0; overflow: hidden;">
                                    <img src="assets/img/product/product-details-img3.jpg" alt="product thumb">
                                <img role="presentation" alt="" src="http://127.0.0.1:5500/assets/img/product/product-details-img3.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 800px; height: 830px; border: none; max-width: none; max-height: none;"></div><div class="pro-large-img img-zoom slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" style="width: 658px; position: relative; left: -1974px; top: 0px; z-index: 998; opacity: 0; overflow: hidden;">
                                    <img src="assets/img/product/product-details-img4.jpg" alt="product thumb">
                                <img role="presentation" alt="" src="http://127.0.0.1:5500/assets/img/product/product-details-img4.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 800px; height: 830px; border: none; max-width: none; max-height: none;"></div></div></div>
                                
                                
                                
                            </div>
                            <div class="pro-nav slick-row-5 slick-initialized slick-slider">
                                <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 668px; transform: translate3d(0px, 0px, 0px);"><div class="pro-nav-thumb slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 157px;"><img src="assets/img/product/product-details-img1.jpg" alt=""></div><div class="pro-nav-thumb slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" style="width: 157px;"><img src="assets/img/product/product-details-img2.jpg" alt=""></div><div class="pro-nav-thumb slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" style="width: 157px;"><img src="assets/img/product/product-details-img3.jpg" alt=""></div><div class="pro-nav-thumb slick-slide slick-active" data-slick-index="3" aria-hidden="false" tabindex="0" style="width: 157px;"><img src="assets/img/product/product-details-img4.jpg" alt=""></div></div></div>
                                
                                
                                
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="product-details-des">
                                <h3 class="pro-det-title">Primitive Mens Premium Shoes</h3>
                                <div class="pro-review">
                                    <span><a href="#">1 Review(s)</a></span>
                                </div>
                                <div class="price-box">
                                    <span class="regular-price">$70.00</span>
                                    <span class="old-price"><del>$80.00</del></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                <div class="quantity-cart-box d-flex align-items-center mb-20">
                                    <div class="quantity">
                                        <div class="pro-qty"><span class="dec qtybtn">-</span><input type="text" value="1"><span class="inc qtybtn">+</span></div>
                                    </div>
                                    <a href="cart.html" class="btn btn-default">Add To Cart</a>
                                </div>
                                <div class="availability mb-20">
                                    <h5 class="cat-title">Availability:</h5>
                                    <span>In Stock</span>
                                </div>
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
            </div>
        </div>
    </div>
</div> --}}
@include('layouts.frontend.partials.footer')
