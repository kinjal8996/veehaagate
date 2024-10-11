@extends('frontend.layout.main')

@section('main-container')
    <div class="card mt-4 mb-2" style="width: 65rem; height: auto; margin: 0 auto; margin-bottom:20px;"> <!-- Center the card -->
        <div class="card-body">
            <h2 class="card-title text-center mt-3 mb-3" style="text-align: center; margin-bottom: 20px; ">Order History</h2> <!-- Center the title -->
            @if($orders->isNotEmpty())
                <div style="overflow-x: auto; text-align: center;"> <!-- Center the table -->
                    <table class="table table-bordered text-center" > <!-- Center the table -->
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Product</th>
                                <th>Total Cost</th>
                                <th>Date & Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $reversedOrders = $orders->reverse();
                            @endphp
                            @foreach($reversedOrders as $order)
                                <tr>
                                    <td>{{ $order->order_id ?: '-' }}</td>
                                    <td>
                                        <ul style="list-style-type: none; padding: 0; text-align: left;"> <!-- Align product names to the left -->
                                            @php
                                                $Productnames = explode(',', $order->product_name);
                                            @endphp
                                            @foreach ($Productnames as $name)
                                                <li>{{ $name }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>₹{{ $order->total_cost }}</td>
                                    <td>{{ $order->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p style="text-align: center;">No orders found.</p> <!-- Center the message -->
            @endif
        </div>
    </div>
@endsection
