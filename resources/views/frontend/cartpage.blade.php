@extends('Frontend.Layout.main')

@section('main-container')
<h2 style="text-align: center; font-size: 32px; color: #333; margin-bottom: 20px;">Cart Page</h2>

<div style="margin: 50px auto; max-width: 900px; background-color: #f5f5f5; padding: 30px; border-radius: 8px;">
    <!-- Cart Page Title -->
    @foreach ($cart as $item)
    {{-- @php
        $itemTotal = $item['price'] * $item['quantity'];
        // $totalAmount += $itemTotal;
    @endphp --}}
    <!-- Product Card -->
    <div style="background-color: white; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); margin-bottom: 20px;">
        <div style="display: flex; align-items: center; justify-content: space-between;">


            <!-- Product Image -->
            <div style="flex-basis: 20%; text-align: center;">
                {{-- <img src="https://img.freepik.com/premium-photo/gorgeous-indian-bridal-jewellery_1261241-1349.jpg?w=740" alt="Product Image" style="width: 100px; border-radius: 5px;" /> --}}
                <img src="{{ asset('productsimg/' . $item['image']) }}" alt="Product Image" style="width: 100px; border-radius: 5px;" />
            </div>

            <!-- Product Details -->
            <div style="flex-basis: 60%; padding-left: 20px;">

                <p style="font-size: 18px; margin: 0;">Name:{{ $item['name'] }}</p>
                <p style="font-size: 18px; margin: 0;">Quantity: {{ $item['quantity'] }}</p>
                <p style="font-size: 16px; margin: 5px 0;"> Price:₹{{ $item['price'] }}</p>
            </div>
            <div style="flex-basis: 20%; text-align: right;">
                <button onclick="removeFromCart('{{ $item['product_id'] }}')" style="background-color: #d9534f; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
                    <i class="bi bi-trash"></i> Remove
                </button>
            </div>
            {{-- <button id="clearCartButton" class="btn btn-danger">Clear Cart</button> --}}





        </div>
    </div>
    @endforeach
    <!-- Total Cost and Checkout -->
    <div style="display: flex; justify-content: space-between; align-items: center; background-color: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        <!-- Total Cost -->
        <div>
            @php
            $totalAmount = 0;
        @endphp
            <p style="font-size: 18px; font-weight: bold; margin: 0;">Total Cost:</p>
            <p style="font-size: 20px; color: #000; margin: 0;">₹6660</p>
        </div>

        <!-- Checkout Button -->
        <div>
            <a href="{{url('/checkoutpage')}} " style="background-color:green; color: white; border: none; padding: 15px 30px; text-decoration:none; font-size: 18px; border-radius: 5px; cursor: pointer;">Checkout</a>

        </div>
    </div>

    <!-- Back Button -->
    <div style="text-align: center; margin-top: 20px;">
        <button style="background-color: #000; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Back</button>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    function removeFromCart(productId) {
        $.ajax({
            url: '{{ route("cart.remove") }}', // Update with the correct route
            method: 'POST',
            data: {
                id: productId,
                _token: '{{ csrf_token() }}' // Include CSRF token for security
            },
            success: function(response) {
                alert(response.success); // Show success message
                // Optionally, you can remove the product card from the UI
                location.reload(); // Reload the page to reflect changes
            },
            error: function(xhr) {
                alert('Error: ' + xhr.responseJSON.message); // Show error message
            }
        });
    }
</script>


{{-- If remove button do not work then use this code --}}
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#clearCartButton').on('click', function() {
        $.ajax({
            url: '{{ route("cart.clear") }}',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}' // Include CSRF token for security
            },
            success: function(response) {
                alert(response.success); // Show success message
                // Optionally, you can refresh the page or update the cart display here
            },
            error: function(xhr) {
                alert('Error: ' + xhr.responseJSON.message); // Show error message
            }
        });
    });
</script> --}}
@endsection
