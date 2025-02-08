<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrdersExport implements FromCollection, WithHeadings
{
    protected $orders;

    /**
     * Inject a collection of orders.
     *
     * @param \Illuminate\Support\Collection $orders
     */
    public function __construct(Collection $orders)
    {
        $this->orders = $orders;
    }

    /**
     * Prepare the data collection for export.
     */
    public function collection()
    {
        // Transform each order to a simple array
        return $this->orders->map(function ($order) {
            return [
                'Order ID'         => $order->id,
                'Total Amount'     => $order->total_amount,
                'Status'           => $order->status,
                'Shipping Address' => $order->shipping_address,
                'Created At'       => $order->created_at->toDateTimeString(),
            ];
        });
    }

    /**
     * Define the column headings.
     */
    public function headings(): array
    {
        return ['Order ID', 'Total Amount', 'Status', 'Shipping Address', 'Created At'];
    }
}
