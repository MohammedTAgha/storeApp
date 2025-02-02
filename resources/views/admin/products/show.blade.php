@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
{{-- @dump($product->category->name) --}}

<div class="content-body">
    <!-- app e-commerce details start -->
    <section class="app-ecommerce-details">
        <div class="card">
            <div class="card-body">
                <div class="row my-2">
                    <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="{{ asset($product->image_url) }}" alt="{{ $product->name }}" class="img-fluid product-img rounded shadow">
                        </div>
                    </div>
                    <div class="col-12 col-md-7">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="mb-1">{{ $product->name }}</h4>
                            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                        </div>
                        <span class="text-muted">Category: <a href="{{ route('admin.categories.show', $product->category->id) }}" class="fw-bold">{{ $product->category->name }}</a></span>
                        <div class="mt-1">
                            <h4 class="item-price text-primary">${{ number_format($product->price, 2) }}</h4>
                        </div>
                        <p class="mt-2 text-muted">Availability: <span class="text-success">In Stock</span></p>
                        <p class="mt-2">{{ $product->description }}</p>
                        <hr>
                        <div class="d-flex flex-column flex-sm-row pt-1">
                            {{-- <a href="#" class="btn btn-outline-secondary me-2">
                                <i class="fas fa-heart"></i> Wishlist
                            </a>
                            <button class="btn btn-primary">
                                <i class="fas fa-shopping-cart"></i> Add to Cart
                            </button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- app e-commerce details end -->

</div>
@endsection