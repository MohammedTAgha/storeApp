@extends('layouts.frontend.app')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="breadcrumb-wrap text-center">
            <nav aria-label="breadcrumb">
                <h1 class="breadcrumb-title">My orders</h1>

                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">My orders</li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<div class="tab-pane fade active show" id="orders" role="tabpanel">
    <div class="myaccount-content">
        <h3>Orders</h3>
         <a href="{{ route('orders.download.excel') }}" class="btn">Download all</a> 

        <div class="myaccount-table table-responsive text-center">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Order</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- <tr>
                        <td>1</td>
                        <td>Aug 22, 2018</td>
                        <td>$3000</td>
                        <td><a href="cart.html" class="btn ">View</a></td>
                    </tr> --}}
                    @forelse ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->created_at->format('M d, Y') }}</td>
                            <td>${{ $order->total }}</td>
                            <td><a href="{{ route('orders.show', $order->id) }}" class="btn">View</a></td>
                            <td><a href="{{ route('orders.download.order.excel', $order->id) }}" class="btn">Download</a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">You don't have any orders yet.</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection