@extends('layouts.app')

@section('title', 'Category Details')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Category: {{ $category->name }}</h4>
    </div>
    <div class="card-body">
        <h5>Products</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($category->products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->name }}</td>
                    <td>${{ number_format($product->price, 2) }}</td>
                    <td>{{ $product->stock_quantity }}</td>
                    <td>
                        <a href="{{ route('admin.products.show', $product->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">No products available in this category.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
