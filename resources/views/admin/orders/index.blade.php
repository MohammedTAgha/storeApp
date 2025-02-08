@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="content-body">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4 class="card-title">Orders</h4>
            <a href="{{ route('admin.orders.download.excel') }}" class="btn btn-success waves-effect waves-float waves-light">
                Download Orders (Excel)
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer</th>
                        <th>Total Amount</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $order->user->name ?? 'Guest' }}</td>
                            <td>${{ number_format($order->total_amount, 2) }}</td>
                            <td>
                                <span class="badge 
                                    @if($order->status == 'pending') bg-warning 
                                    @elseif($order->status == 'completed') bg-success 
                                    @elseif($order->status == 'cancelled') bg-danger 
                                    @else bg-secondary 
                                    @endif">
                                    {{ ucfirst($order->status) }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-info btn-sm waves-effect waves-float waves-light">
                                    View
                                </a>
                                <a   class="btn btn-success btn-sm waves-effect waves-float waves-light">
                                    Export
                                </a>
                                
                               
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="mt-3">
                {{ $orders->links() }}
            </div>
        </div>
    </div>
</div>
@endsection