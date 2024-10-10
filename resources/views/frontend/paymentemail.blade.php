<!DOCTYPE html>
<html>
<head>
    <title>Payment Confirmation</title>
</head>
<body>
    <h2>Dear {{ $user->fullname }},</h2>

    <p>Your payment for Order ID: {{ $checkout->order_id }} has been successfully processed.</p>

    <p>Payment details:</p>
    <ul>
        <li>Payment ID: {{ $checkout->payment_id }}</li>
        <li>Amount:₹{{ $checkout->total_cost }}</li>
    </ul>


    <p>Thank you for your purchase!</p>
</body>
</html>
