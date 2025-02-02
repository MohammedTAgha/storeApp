@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="content-detached content-right">
    <div class="content-body">
        <!-- E-commerce Content Section Starts -->
        <section id="ecommerce-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="ecommerce-header-items">
                        <div class="result-toggler">
                            <button class="navbar-toggler shop-sidebar-toggler" type="button" data-bs-toggle="collapse">
                                <span class="navbar-toggler-icon d-block d-lg-none"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></span>
                            </button>
                            <div class="search-results">16285 results found</div>
                        </div>
                        <div class="view-options d-flex">
                            <div class="btn-group dropdown-sort">
                                <button type="button" class="btn btn-outline-primary dropdown-toggle me-1 waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="active-sorting">Featured</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Featured</a>
                                    <a class="dropdown-item" href="#">Lowest</a>
                                    <a class="dropdown-item" href="#">Highest</a>
                                </div>
                            </div>
                            <div class="btn-group" role="group">
                                <input type="radio" class="btn-check" name="radio_options" id="radio_option1" autocomplete="off" checked="">
                                <label class="btn btn-icon btn-outline-primary view-btn grid-view-btn waves-effect" for="radio_option1"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid font-medium-3"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg></label>
                                <input type="radio" class="btn-check" name="radio_options" id="radio_option2" autocomplete="off">
                                <label class="btn btn-icon btn-outline-primary view-btn list-view-btn waves-effect" for="radio_option2"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list font-medium-3"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- E-commerce Content Section Starts -->

        <!-- background Overlay when sidebar is shown  starts-->
        <div class="body-content-overlay"></div>
        <!-- background Overlay when sidebar is shown  ends-->

        <!-- E-commerce Search Bar Starts -->
        <section id="ecommerce-searchbar" class="ecommerce-searchbar">
            <div class="row mt-1">
                <div class="col-sm-12">
                    <div class="input-group input-group-merge">
                        <input type="text" class="form-control search-product" id="shop-search" placeholder="Search Product" aria-label="Search..." aria-describedby="shop-search">
                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search text-muted"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
                    </div>
                </div>
            </div>
        </section>
        <!-- E-commerce Search Bar Ends -->

        <!-- E-commerce Products Starts -->
        <section id="ecommerce-products" class="grid-view">
            <div class="card ecommerce-card">
                <div class="item-img text-center">
                    <a href="app-ecommerce-details.html">
                        <img class="img-fluid card-img-top" src="../../../app-assets/images/pages/eCommerce/1.png" alt="img-placeholder"></a>
                </div>
                <div class="card-body">
                    <div class="item-wrapper">
                        <div class="item-rating">
                            <ul class="unstyled-list list-inline">
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star unfilled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                            </ul>
                        </div>
                        <div>
                            <h6 class="item-price">$339.99</h6>
                        </div>
                    </div>
                    <h6 class="item-name">
                        <a class="text-body" href="app-ecommerce-details.html">Apple Watch Series 5</a>
                        <span class="card-text item-company">By <a href="#" class="company-name">Apple</a></span>
                    </h6>
                    <p class="card-text item-description">
                        On Retina display that never sleeps, so it’s easy to see the time and other important information, without
                        raising or tapping the display. New location features, from a built-in compass to current elevation, help users
                        better navigate their day, while international emergency calling1 allows customers to call emergency services
                        directly from Apple Watch in over 150 countries, even without iPhone nearby. Apple Watch Series 5 is available
                        in a wider range of materials, including aluminium, stainless steel, ceramic and an all-new titanium.
                    </p>
                </div>
                <div class="item-options text-center">
                    <div class="item-wrapper">
                        <div class="item-cost">
                            <h4 class="item-price">$339.99</h4>
                        </div>
                    </div>
                    <a href="#" class="btn btn-light btn-wishlist waves-effect waves-float waves-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                        <span>Wishlist</span>
                    </a>
                    <a href="#" class="btn btn-primary btn-cart waves-effect waves-float waves-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                        <span class="add-to-cart">Add to cart</span>
                    </a>
                </div>
            </div>
            <div class="card ecommerce-card">
                <div class="item-img text-center">
                    <a href="app-ecommerce-details.html">
                        <img class="img-fluid card-img-top" src="../../../app-assets/images/pages/eCommerce/2.png" alt="img-placeholder">
                    </a>
                </div>
                <div class="card-body">
                    <div class="item-wrapper">
                        <div class="item-rating">
                            <ul class="unstyled-list list-inline">
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                            </ul>
                        </div>
                        <div>
                            <h6 class="item-price">$669.99</h6>
                        </div>
                    </div>
                    <h6 class="item-name">
                        <a class="text-body" href="app-ecommerce-details.html">Apple iPhone 11 (64GB, Black)</a>
                        <span class="card-text item-company">By <a href="#" class="company-name">Apple</a></span>
                    </h6>
                    <p class="card-text item-description">
                        The Apple iPhone 11 is a great smartphone, which was loaded with a lot of quality features. It comes with a
                        waterproof and dustproof body which is the key attraction of the device. The excellent set of cameras offer
                        excellent images as well as capable of recording crisp videos. However, expandable storage and a fingerprint
                        scanner would have made it a perfect option to go for around this price range.
                    </p>
                </div>
                <div class="item-options text-center">
                    <div class="item-wrapper">
                        <div class="item-cost">
                            <h4 class="item-price">$699.99</h4>
                        </div>
                    </div>
                    <a href="#" class="btn btn-light btn-wishlist waves-effect waves-float waves-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart text-danger"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                        <span>Wishlist</span>
                    </a>
                    <a href="#" class="btn btn-primary btn-cart waves-effect waves-float waves-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                        <span class="add-to-cart">Add to cart</span>
                    </a>
                </div>
            </div>
            <div class="card ecommerce-card">
                <div class="item-img text-center">
                    <a href="app-ecommerce-details.html"><img class="img-fluid card-img-top" src="../../../app-assets/images/pages/eCommerce/3.png" alt="img-placeholder"></a>
                </div>
                <div class="card-body">
                    <div class="item-wrapper">
                        <div class="item-rating">
                            <ul class="unstyled-list list-inline">
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star unfilled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                            </ul>
                        </div>
                        <div>
                            <div class="item-cost">
                                <h6 class="item-price">$999.99</h6>
                            </div>
                        </div>
                    </div>
                    <h6 class="item-name">
                        <a class="text-body" href="app-ecommerce-details.html">Apple iMac 27-inch</a>
                        <span class="card-text item-company">By <a href="#" class="company-name">Apple</a></span>
                    </h6>
                    <p class="card-text item-description">
                        The all-in-one for all. If you can dream it, you can do it on iMac. It’s beautifully &amp; incredibly intuitive and
                        packed with tools that let you take any idea to the next level. And the new 27-inch model elevates the
                        experience in way, with faster processors and graphics, expanded memory and storage, enhanced audio and video
                        capabilities, and an even more stunning Retina 5K display. It’s the desktop that does it all — better and faster
                        than ever.
                    </p>
                </div>
                <div class="item-options text-center">
                    <div class="item-wrapper">
                        <div class="item-cost">
                            <h4 class="item-price">$999.99</h4>
                            <p class="card-text shipping"><span class="badge rounded-pill badge-light-success">Free Shipping</span></p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-light btn-wishlist waves-effect waves-float waves-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                        <span>Wishlist</span>
                    </a>
                    <a href="#" class="btn btn-primary btn-cart waves-effect waves-float waves-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                        <span class="add-to-cart">Add to cart</span>
                    </a>
                </div>
            </div>
            <div class="card ecommerce-card">
                <div class="item-img text-center">
                    <a href="app-ecommerce-details.html">
                        <img class="img-fluid card-img-top" src="../../../app-assets/images/pages/eCommerce/4.png" alt="img-placeholder"></a>
                </div>
                <div class="card-body">
                    <div class="item-wrapper">
                        <div class="item-rating">
                            <ul class="unstyled-list list-inline">
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star unfilled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star unfilled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                            </ul>
                        </div>
                        <div class="item-cost">
                            <h6 class="item-price">$49.99</h6>
                        </div>
                    </div>
                    <h6 class="item-name">
                        <a class="text-body" href="app-ecommerce-details.html">OneOdio A71 Wired Headphones</a>
                        <span class="card-text item-company">By <a href="#" class="company-name">OneOdio</a></span>
                    </h6>
                    <p class="card-text item-description">
                        Omnidirectional detachable boom mic upgrades the headphones into a professional headset for gaming, business,
                        podcasting and taking calls on the go. Better pick up your voice. Control most electric devices through voice
                        activation, or schedule a ride with Uber and order a pizza. OneOdio A71 Wired Headphones voice-controlled device
                        turns any home into a smart device on a smartphone or tablet.
                    </p>
                </div>
                <div class="item-options text-center">
                    <div class="item-wrapper">
                        <div class="item-cost">
                            <h4 class="item-price">$49.99</h4>
                        </div>
                    </div>
                    <a href="#" class="btn btn-light btn-wishlist waves-effect waves-float waves-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                        <span>Wishlist</span>
                    </a>
                    <a href="#" class="btn btn-primary btn-cart waves-effect waves-float waves-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                        <span class="add-to-cart">Add to cart</span>
                    </a>
                </div>
            </div>
            <div class="card ecommerce-card">
                <div class="item-img text-center">
                    <a href="app-ecommerce-details.html">
                        <img class="img-fluid card-img-top" src="../../../app-assets/images/pages/eCommerce/5.png" alt="img-placeholder">
                    </a>
                </div>
                <div class="card-body">
                    <div class="item-wrapper">
                        <div class="item-rating">
                            <ul class="unstyled-list list-inline">
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star unfilled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                            </ul>
                        </div>
                        <div class="item-cost">
                            <h6 class="item-price">$999.99</h6>
                        </div>
                    </div>
                    <h6 class="item-name">
                        <a class="text-body" href="app-ecommerce-details.html">
                            Apple - MacBook Air® (Latest Model) - 13.3" Display - Silver
                        </a>
                        <span class="card-text item-company">By <a href="#" class="company-name">Apple</a></span>
                    </h6>
                    <p class="card-text item-description">
                        MacBook Air is a thin, lightweight laptop from Apple. MacBook Air features up to 8GB of memory, a
                        fifth-generation Intel Core processor, Thunderbolt 2, great built-in apps, and all-day battery life.1 Its thin,
                        light, and durable enough to take everywhere you go-and powerful enough to do everything once you get there,
                        better.
                    </p>
                </div>
                <div class="item-options text-center">
                    <div class="item-wrapper">
                        <div class="item-cost">
                            <h4 class="item-price">$999.99</h4>
                        </div>
                    </div>
                    <a href="#" class="btn btn-light btn-wishlist waves-effect waves-float waves-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart text-danger"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                        <span>Wishlist</span>
                    </a>
                    <a href="#" class="btn btn-primary btn-cart waves-effect waves-float waves-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                        <span class="add-to-cart">Add to cart</span>
                    </a>
                </div>
            </div>
            <div class="card ecommerce-card">
                <div class="item-img text-center">
                    <a href="app-ecommerce-details.html">
                        <img class="img-fluid card-img-top" src="../../../app-assets/images/pages/eCommerce/6.png" alt="img-placeholder">
                    </a>
                </div>
                <div class="card-body">
                    <div class="item-wrapper">
                        <div class="item-rating">
                            <ul class="unstyled-list list-inline">
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star unfilled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star unfilled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star unfilled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                            </ul>
                        </div>
                        <div class="item-cost">
                            <h6 class="item-price">$429.99</h6>
                        </div>
                    </div>
                    <h6 class="item-name">
                        <a class="text-body" href="app-ecommerce-details.html"> Switch Pro Controller </a>
                        <span class="card-text item-company">By <a href="#" class="company-name">Sharp</a></span>
                    </h6>
                    <p class="card-text item-description">
                        The Nintendo Switch Pro Controller is one of the priciest "baseline" controllers in the current console
                        generation, but it's also sturdy, feels good to play with, has an excellent direction pad, and features
                        impressive motion sensors and vibration systems. On top of all of that, it uses Bluetooth, so you don't need an
                        adapter to use it with your PC.
                    </p>
                </div>
                <div class="item-options text-center">
                    <div class="item-wrapper">
                        <div class="item-cost">
                            <h4 class="item-price">$429.99</h4>
                            <p class="card-text shipping"><span class="badge rounded-pill badge-light-success">Free Shipping</span></p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-light btn-wishlist waves-effect waves-float waves-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                        <span>Wishlist</span>
                    </a>
                    <a href="#" class="btn btn-primary btn-cart waves-effect waves-float waves-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                        <span class="add-to-cart">Add to cart</span>
                    </a>
                </div>
            </div>
            <div class="card ecommerce-card">
                <div class="item-img text-center">
                    <a href="app-ecommerce-details.html">
                        <img class="img-fluid card-img-top" src="../../../app-assets/images/pages/eCommerce/7.png" alt="img-placeholder">
                    </a>
                </div>
                <div class="card-body">
                    <div class="item-wrapper">
                        <div class="item-rating">
                            <ul class="unstyled-list list-inline">
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star unfilled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                            </ul>
                        </div>
                        <div class="item-cost">
                            <h6 class="item-price">$129.29</h6>
                        </div>
                    </div>
                    <h6 class="item-name">
                        <a class="text-body" href="app-ecommerce-details.html"> Google - Google Home - White/Slate fabric </a>
                        <span class="card-text item-company">By <a href="#" class="company-name">Google</a></span>
                    </h6>
                    <p class="card-text item-description">
                        Simplify your everyday life with the Google Home, a voice-activated speaker powered by the Google Assistant. Use
                        voice commands to enjoy music, get answers from Google and manage everyday tasks. Google Home is compatible with
                        Android and iOS operating systems, and can control compatible smart devices such as Chromecast or Nest.
                    </p>
                </div>
                <div class="item-options text-center">
                    <div class="item-wrapper">
                        <div class="item-cost">
                            <h4 class="item-price">$129.29</h4>
                            <p class="card-text shipping">
                                <span class="badge rounded-pill badge-light-success">Free Shipping</span>
                            </p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-light btn-wishlist waves-effect waves-float waves-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                        <span>Wishlist</span>
                    </a>
                    <a href="#" class="btn btn-primary btn-cart waves-effect waves-float waves-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                        <span class="add-to-cart">Add to cart</span>
                    </a>
                </div>
            </div>
            <div class="card ecommerce-card">
                <div class="item-img text-center">
                    <a href="app-ecommerce-details.html">
                        <img class="img-fluid card-img-top" src="../../../app-assets/images/pages/eCommerce/8.png" alt="img-placeholder">
                    </a>
                </div>
                <div class="card-body">
                    <div class="item-wrapper">
                        <div class="item-rating">
                            <ul class="unstyled-list list-inline">
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                            </ul>
                        </div>
                        <div class="item-cost">
                            <h6 class="item-price">$7999.99</h6>
                        </div>
                    </div>
                    <h6 class="item-name">
                        <a class="text-body" href="app-ecommerce-details.html"> Sony 4K Ultra HD LED TV </a>
                        <span class="card-text item-company">By <a href="#" class="company-name">Apple</a></span>
                    </h6>
                    <p class="card-text item-description">
                        Sony 4K Ultra HD LED TV has 4K HDR Support. The TV provides clear visuals and provides distinct sound quality
                        and an immersive experience. This TV has Yes HDMI ports &amp; Yes USB ports. Connectivity options included are HDMI.
                        You can connect various gadgets such as your laptop using the HDMI port. The TV comes with a 1 Year warranty.
                    </p>
                </div>
                <div class="item-options text-center">
                    <div class="item-wrapper">
                        <div class="item-cost">
                            <h4 class="item-price">$29.99</h4>
                        </div>
                    </div>
                    <a href="#" class="btn btn-light btn-wishlist waves-effect waves-float waves-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                        <span>Wishlist</span>
                    </a>
                    <a href="#" class="btn btn-primary btn-cart waves-effect waves-float waves-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                        <span class="add-to-cart">Add to cart</span>
                    </a>
                </div>
            </div>
            <div class="card ecommerce-card">
                <div class="item-img text-center">
                    <a href="app-ecommerce-details.html">
                        <img class="img-fluid card-img-top" src="../../../app-assets/images/pages/eCommerce/9.png" alt="img-placeholder">
                    </a>
                </div>
                <div class="card-body">
                    <div class="item-wrapper">
                        <div class="item-rating">
                            <ul class="unstyled-list list-inline">
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star filled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                                <li class="ratings-list-item"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star unfilled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></li>
                            </ul>
                        </div>
                        <div class="item-cost">
                            <h6 class="item-price">$14.99</h6>
                        </div>
                    </div>
                    <h6 class="item-name">
                        <a class="text-body" href="app-ecommerce-details.html"> OnePlus 7 Pro </a>
                        <span class="card-text item-company">By <a href="#" class="company-name">Philips</a></span>
                    </h6>
                    <p class="card-text item-description">
                        The OnePlus 7 Pro features a brand new design, with a glass back and front and curved sides. The phone feels
                        very premium but’s it’s also very heavy. The Nebula Blue variant looks slick but it’s quite slippery, which
                        makes single-handed use a real challenge. It has a massive 6.67-inch ‘Fluid AMOLED’ display with a QHD+
                        resolution, 90Hz refresh rate and support for HDR 10+ content. The display produces vivid colours, deep blacks
                        and has good viewing angles.
                    </p>
                </div>
                <div class="item-options text-center">
                    <div class="item-wrapper">
                        <div class="item-cost">
                            <h4 class="item-price">$14.99</h4>
                        </div>
                    </div>
                    <a href="#" class="btn btn-light btn-wishlist waves-effect waves-float waves-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                        <span>Wishlist</span>
                    </a>
                    <a href="#" class="btn btn-primary btn-cart waves-effect waves-float waves-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                        <span class="add-to-cart">Add to cart</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- E-commerce Products Ends -->

        <!-- E-commerce Pagination Starts -->
        <section id="ecommerce-pagination">
            <div class="row">
                <div class="col-sm-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mt-2">
                            <li class="page-item prev-item"><a class="page-link" href="#"></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item" aria-current="page"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                            <li class="page-item next-item"><a class="page-link" href="#"></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!-- E-commerce Pagination Ends -->

    </div>
</div>
@endsection