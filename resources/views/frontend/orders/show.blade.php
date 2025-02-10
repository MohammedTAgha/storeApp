@extends('layouts.frontend.app')

@section('content')
        {{-- @dd($order->orderItems) --}}
        <!-- cart main wrapper start -->
        <div class="cart-main-wrapper section-padding">
            <div class="container">
                <div class="section-bg-color">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Cart Table Area -->
                            <div class="cart-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="pro-thumbnail">Thumbnail</th>
                                            <th class="pro-title">Product</th>
                                            <th class="pro-price">Price</th>
                                            <th class="pro-quantity">Quantity</th>
                                            <th class="pro-subtotal">Total</th>
                                            {{-- <th class="pro-remove">Remove</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @if ($order->orderItems->isEmpty())
                                            <tr>
                                                <td colspan="6" class="text-center">Your cart is currently empty.</td>
                                            </tr>
                                        @else
                                            @foreach ($order->orderItems as $item)
                                                <tr>
                                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="{{ asset($item->product->image_url) }}" alt="{{ $item->product->name }}" /></a></td>
                                                    <td class="pro-title"><a href="#">{{ $item->product->name }}</a></td>
                                                    <td class="pro-price"><span>{{ $item->product->price }}</span></td>
                                                    <td class="pro-quantity">
                                                        <div class="pro-qty"><input type="text" value="{{ $item->quantity }}"></div>
                                                    </td>
                                                    <td class="pro-subtotal"><span>{{ $item->quantity * $item->product->price }}</span></td>
                                                    {{-- <td class="pro-remove"> --}}
                                                        {{-- <form action="{{ route('cart.destroy', $item->id) }}" method="POST" style="display: inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" style="border: none; background: none;">
                                                                <i class="fa fa-trash-o"></i>
                                                            </button>
                                                        </form> --}}
                                                    {{-- </td> --}}
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <!-- Cart Update Option -->
                            <div class="cart-update-option d-block d-md-flex justify-content-between">
                                <div class="apply-coupon-wrapper">
                                    <form action="#" method="post" class=" d-block d-md-flex">
                                        <input type="text" placeholder="Enter Your Coupon Code" required />
                                        <button class="btn">Apply Coupon</button>
                                    </form>
                                </div>
                                <div class="cart-update">
                                    <a href="#" class="btn">Update Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 ml-auto">
                            <!-- Cart Calculation Area -->
                            <div class="cart-calculator-wrapper">
                                <div class="cart-calculate-items">
                                    <h3>Cart Totals</h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <td>Sub Total</td>
                                                <td>${{$order->calculateTotalPrice()}}</td>
                                            </tr>
                                            <tr>
                                                <td>Shipping</td>
                                                <td>$70</td>
                                            </tr>
                                            <tr class="total">
                                                <td>Total</td>
                                                <td class="total-amount">${{$order->calculateTotalPrice() + 70}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <a href="{{route('orders.download.order.excel',$order->id)}}" class="btn d-block">DOWNLOAD ORDER</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart main wrapper end -->
@endsection