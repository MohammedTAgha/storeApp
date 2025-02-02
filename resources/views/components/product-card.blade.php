@props(['product'])
<div class="card ecommerce-card">
    <div class="item-img text-center">
        <a href="{{ route('admin.products.show', $product->id) }}">
            <img class="img-fluid card-img-top" src="{{ asset($product->image_url) }}" alt="{{ $product->name }}">
        </a>
    </div>
    <div class="card-body">
        <div class="item-wrapper">
            <div>
                <h6 class="item-price">${{ $product->price }}</h6>
            </div>
        </div>
        <h6 class="item-name">
            <a class="text-body" href="{{ route('admin.products.show', $product->id) }}">{{ $product->name }}</a>
            <span class="card-text item-company"> 
                <a href="#" class="company-name">{{ $product->category->name }}</a>
            </span>
        </h6>
        <p class="card-text item-description">{{ $product->description }}</p>
    </div>
    <div class="item-options text-center">
        <div class="item-wrapper">
            <div class="item-cost">
                <h4 class="item-price">${{ $product->price }}</h4>
            </div>
        </div>
        <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-light btn-wishlist waves-effect waves-float waves-light">
            <i class="feather feather-edit"></i>
            <span>Edit</span>
        </a>
        <a href="{{ route('admin.products.show', $product->id) }}" class="btn btn-primary waves-effect waves-float waves-light">
            <i class="feather feather-shopping-cart"></i>
            <span class="add-to-cart">Show Details</span>
        </a>
    </div>
</div>
