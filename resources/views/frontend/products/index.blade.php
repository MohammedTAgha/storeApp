<!-- resources/views/frontend/products/index.blade.php -->

@extends('layouts.frontend.app')

@section('content')

<div class="breadcrumb-area bg-img" data-bg="assets/img/banner/breadcrumb-banner.jpg" style="background-image: url(&quot;assets/img/banner/breadcrumb-banner.jpg&quot;);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap text-center">
                    <nav aria-label="breadcrumb">
                        <h1 class="breadcrumb-title">shop</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">shop</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="shop-main-wrapper section-padding">
    <div class="container">
        <div class="row">
            <!-- sidebar area start -->
            <div class="col-lg-3 order-2 order-lg-1">
                <div class="sidebar-wrapper">
                    <!-- single sidebar start -->
                    <div class="sidebar-single">
                        <div class="sidebar-title">
                            <h3>Categories</h3>
                        </div>
                        <div class="sidebar-body">
                            <ul class="color-list">
                                @foreach($categories as $category)
                                    <li><a  href="{{ route('admin.categories.show', $category->id) }}">{{ $category->name }} <span>({{ $category->products_count }})</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- single sidebar end -->
                </div>
            </div>
            <!-- sidebar area end -->

            <!-- shop main wrapper start -->
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="shop-product-wrapper">
                    <!-- shop product top wrap start -->
                    <div class="shop-top-bar">
                        <div class="row">
                            <div class="col-xl-5 col-lg-4 col-md-3 order-2 order-md-1">
                                <div class="top-bar-left">
                                    <div class="product-view-mode">
                                        <a class="active" href="#" data-target="grid-view"><i class="fa fa-th"></i></a>
                                        <a href="#" data-target="list-view"><i class="fa fa-list"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-8 col-md-9 order-1 order-md-2">
                                <div class="top-bar-right">
                                    <div class="product-short">
                                        <p>Sort By : </p>
                                        <select class="nice-select" name="sortby" style="display: none;">
                                            <option value="trending">Relevance</option>
                                            <option value="sales">Name (A - Z)</option>
                                            <option value="sales">Name (Z - A)</option>
                                            <option value="rating">Price (Low &gt; High)</option>
                                            <option value="date">Rating (Lowest)</option>
                                            <option value="price-asc">Model (A - Z)</option>
                                            <option value="price-asc">Model (Z - A)</option>
                                        </select>
                                    </div>
                                    <div class="product-amount">
                                        <p>Showing {{ $products->firstItem() }}–{{ $products->lastItem() }} of {{ $products->total() }} results</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shop product top wrap start -->

                    <!-- product item list start -->
                    <div class="shop-product-wrap grid-view row mbn-50">
                        @foreach($products as $product)
                            <div class="col-lg-4 col-sm-6">
                                @include('components.front-product', ['product' => $product])
                            </div>
                        @endforeach
                    </div>
                    <!-- product item list end -->

                    <!-- start pagination area -->
                    <div class="paginatoin-area text-center mt-45">
                        {{ $products->links('pagination::bootstrap-4') }}
                    </div>
                    <!-- end pagination area -->
                </div>
            </div>
            <!-- shop main wrapper end -->
        </div>
    </div>
</div>
@endsection