<?php

namespace App\Services;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\OrdersExport;
use App\Exports\OrderDetailsExport;
use App\Models\Order;

class OrderExportService
{
    /**
     * Export a collection of orders as an Excel file.
     *
     * @param \Illuminate\Support\Collection $orders
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function exportOrders(Collection $orders)
    {
        return Excel::download(new OrdersExport($orders), 'orders.xlsx');
    }

    /**
     * Export a specific order’s details as an Excel file.
     *
     * @param \App\Models\Order $order
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function exportOrderDetails(Order $order)
    {
        return Excel::download(new OrderDetailsExport($order), 'order_' . $order->id . '.xlsx');
    }
}
