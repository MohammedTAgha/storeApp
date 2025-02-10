@extends('layouts.app')



@section('content')
<div class="content-body">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4 class="card-title">Order Details - #{{ $order->id }}</h4>
            <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary waves-effect waves-float waves-light">
                Back to Orders
            </a>
        </div>

        <div class="card-body">
            <!-- Order Information -->
            <div class="mb-3">
                <h5>Order Information</h5>
                <p><strong>Customer:</strong> {{ $order->user->name ?? 'Guest' }}</p>
                <p><strong>Email:</strong> {{ $order->user->email ?? 'N/A' }}</p>
                <p><strong>Total Amount:</strong> ${{ number_format($order->total_amount, 2) }}</p>
                <p><strong>Status:</strong> 
                    <span class="badge 
                        @if($order->status == 'pending') bg-warning 
                        @elseif($order->status == 'completed') bg-success 
                        @elseif($order->status == 'cancelled') bg-danger 
                        @else bg-secondary 
                        @endif">
                        {{ ucfirst($order->status) }}
                    </span>
                </p>
                <p><strong>Shipping Address:</strong> {{ $order->shipping_address }}</p>
                <p><strong>Order Date:</strong> {{ $order->created_at->format('d M Y, H:i A') }}</p>
            </div>

            <!-- Order Items -->
            <h5>Order Items</h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order->orderItems as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->product->name }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>${{ number_format($item->price, 2) }}</td>
                            <td>${{ number_format($item->quantity * $item->price, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Export Order Details Button -->
            <div class="mt-3">
                <a href="{{ route('admin.orders.download.order.excel', $order->id) }}" class="btn btn-success waves-effect waves-float waves-light">
                    Download Order Details (Excel)
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
