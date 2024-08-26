@php
    $orders = App\Models\Order::where('order_id', $order_id)->first();
    $billing = App\Models\Billing::where('order_id', $order_id)->first();
    $shipping = App\Models\Shipping::where('order_id', $order_id)->first();
    $ordered_products = App\Models\OrderedProduct::where('order_id', $order_id)->get();
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice for Order #{{ $order_id }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .invoice-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 30px;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .invoice-header {
            background: #f0f0f0;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .invoice-header h2 {
            margin: 04
        }

        .invoice-details {
            padding: 20px;
        }

        .invoice-table {
            width: 100%;
            border-collapse: collapse;
        }

        .invoice-table th,
        .invoice-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .invoice-table th {
            background-color: #f0f0f0;
        }

        .total-section {
            padding: 10px;
            background: #f9f9f9;
            border-top: 1px solid #ddd;
            text-align: right;
        }

        /* Responsive design */
        @media only screen and (max-width: 768px) {
            .invoice-container {
                margin: 20px auto;
                padding: 20px;
            }

            .invoice-details {
                padding: 15px;
            }

            .invoice-table th,
            .invoice-table td {
                padding: 5px;
            }
        }

        @media only screen and (max-width: 480px) {
            .invoice-container {
                margin: 10px auto;
                padding: 10px;
            }

            .invoice-details {
                padding: 10px;
            }

            .invoice-table th,
            .invoice-table td {
                padding: 3px;
            }
        }
    </style>
</head>

<body>

    <div class="invoice-container">

        <div class="invoice-header">
            <h3>Invoice for Order #{{ $order_id }}</h3>
        </div>

        <div class="invoice-details">
            <h4>Company Information:</h4>
            <p>Company Name: FastKart</p>
            <p>Address: United Kingdom</p>
            <p>Phone: +0171223532</p>
            <p>Email: fastkart@fastkart.com</p>

            <h4>Customer Details:</h4>
            <p>Name: {{ ucfirst($billing->name) }}</p>
            <p>Phone: {{ $billing->phone }}</p>
            <p>Email: {{ $billing->email }}</p>
            <p>Address: {{ $billing->address }}</p>

            <h4>Order Shipping Details:</h4>
            <p>Shipping Zip: {{ $shipping->ship_zip_code }}</p>
            <p>Shipping Address: {{ $shipping->ship_address }}</p>
            <p>Estimated Delivery Date: 1 day</p>
        </div>

        <table class="invoice-table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ordered_products as $item)
                    <tr>
                        <td>{{ str($item->rel_to_product->product_name)->words(6) }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->price }}</td>
                        <td>&pound;{{ $item->quantity * $item->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="total-section">
            <h4>Sub Total: &pound;{{ $orders->sub_total }}</h4>
            <h4>Charge: (+) &pound;{{ $orders->charge }}</h4>
            <h4>Total: &pound;{{ $orders->total }}</h4>
        </div>

    </div>

</body>

</html>
