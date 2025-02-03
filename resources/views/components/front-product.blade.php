<!-- resources/views/components/product.blade.php -->

<div class="product-item mb-53">
    <div class="product-thumb">
        <a href="{{ route('products.show', $product->id) }}">
            <img src="{{ asset($product->image_url) }}" alt="{{ $product->name }}">
        </a>
    </div>
    <div class="product-content">
        <h5 class="product-name">
            <a href="{{ route('products.show', $product->id) }}">
                {{ $product->name }}
            </a>
        </h5>
        <div class="price-box">
            <span class="price-regular">${{ $product->price }}</span>
            
                {{-- <span class="price-old"><del>$200</del></span> --}}
             
        </div>
        <div class="product-action-link">
            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
            <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
            <a href="{{ route('products.show', $product->id) }}" > <span data-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
        </div>
    </div>
</div>