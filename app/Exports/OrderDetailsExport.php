<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrderDetailsExport implements FromCollection, WithHeadings
{
    protected $order;

    /**
     * Inject the order for which details will be exported.
     *
     * @param \App\Models\Order $order
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Prepare the order items collection.
     */
    public function collection()
    {
        $orderItems = $this->order->orderItems()->with('product')->get();

        return $orderItems->map(function ($item) {
            return [
                'Order Item ID' => $item->id,
                'Product Name'  => $item->product->name,
                'Quantity'      => $item->quantity,
                'Price'         => $item->price,
                'Total'         => $item->quantity * $item->price,
            ];
        });
    }

    /**
     * Define the column headings.
     */
    public function headings(): array
    {
        return ['Order Item ID', 'Product Name', 'Quantity', 'Price', 'Total'];
    }
}
