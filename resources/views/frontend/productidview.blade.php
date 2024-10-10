{{-- @extends('frontend.layout.main')

@section('main-container')

@if(session('success'))
<script>
    alert("{{ session('success') }}!");
</script>
@endif

<div class="container mt-4">
    <section style="background-color: #eee;">
        <div class="container h-100 py-3">
            <h2 class="text-center mb-3">{{ $product->subcategory->name }}</h2>
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-10">
                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row justify-content-start align-items-center">
                                <!-- Image Section -->
                                <div class="col-md-5 text-center">
                                    <img src="{{ asset('productsimg/' . $product->image) }}" class="img-fluid rounded-3" alt="Product Image" style="height: 400px; width: 100%; object-fit: cover;">
                                </div>
                                <!-- Content Section -->
                                <div class="col-md-7">
                                    <h4 class="mt-3 mt-md-0">{{ $product->name }}</h4>
                                    <p>{{ $product->description }}</p>
                                    <h5><i class="fa fa-rupee"></i> {{ $product->price }}</h5>

                                    <!-- Quantity Section -->
                                    <div class="d-flex justify-content-start mt-3">
                                        <div class="d-flex" style="width: 150px;">
                                            <!-- Decrement Button -->
                                            <button id="decrementBtn" class="btn btn-dark" type="button">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                            <!-- Quantity Input Field -->
                                            <input id="quantityInput" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm text-center" />
                                            <!-- Increment Button -->
                                            <button id="incrementBtn" class="btn btn-dark" type="button">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Add to Cart Button -->



<div class="text-center mt-4">

    <button onclick="addToCart({{ $product->id }} $('#quantityInput').val())" class="btn btn-dark" style="background-color: #d93d3d; border:none; margin-top: 20px;">Add to cart</button>
</div>


                                    <div class="text-center">
                                        <a href="{{ url('/') }}" class="btn btn-dark" role="button">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Including jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
    // Quantity Increment/Decrement Functionality
    var decrementBtn = document.getElementById('decrementBtn');
    var incrementBtn = document.getElementById('incrementBtn');
    var quantityInput = document.getElementById('quantityInput');

    decrementBtn.addEventListener('click', function(event) {
        event.preventDefault();
        var currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
    });

    incrementBtn.addEventListener('click', function(event) {
        event.preventDefault();
        var currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
    });

    // Add to Cart button functionality

    function addToCart(productId, quantity) {
    $.ajax({
        url: '{{ route("cart.add") }}', // Make sure the route is correct
        method: 'POST',
        data: {
            id: productId,
            quantity: quantity, // Ensure this parameter is correctly passed
            _token: '{{ csrf_token() }}' // Include CSRF token for security
        },
        success: function(response) {
            alert(response.message); // Show success message
        },
        error: function(xhr) {
            alert('Error: ' + xhr.responseJSON.message); // Show error message
        }
    });
}

</script>


<script>
    @if(session()->has('success'))
        alert("{{ session()->get('success') }}");
    @endif
</script>
@endsection --}}
@extends('frontend.layout.main')

@section('main-container')

@if(session('success'))
<script>
    alert("{{ session('success') }}!");
</script>
@endif

<div class="container mt-4">
    <section style="background-color: #eee;">
        <div class="container h-100 py-3">
            <h2 class="text-center mb-3">{{ $product->subcategory->name }}</h2>
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-10">
                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row justify-content-start align-items-center">
                                <!-- Image Section -->
                                <div class="col-md-5 text-center">
                                    <img src="{{ asset('productsimg/' . $product->image) }}" class="img-fluid rounded-3" alt="Product Image" style="height: 400px; width: 100%; object-fit: cover;">
                                </div>
                                <!-- Content Section -->
                                <div class="col-md-7">
                                    <h4 class="mt-3 mt-md-0">{{ $product->name }}</h4>
                                    <p>{{ $product->description }}</p>
                                    <h5><i class="fa fa-rupee"></i> {{ $product->price }}</h5>

                                      <!-- Quantity Control -->
                                    <div class="d-flex justify-content-center align-items-center mt-3">
                                        <button id="decrement" class="btn btn-secondary">-</button>
                                        <input type="number" id="quantity" value="1" min="1" class="form-control mx-2" style="width: 60px; text-align: center;">
                                        <button id="increment" class="btn btn-secondary">+</button>
                                    </div>

                                    <!-- Add to Cart Button -->
                                    <div class="text-center mt-4">
                                        <button onclick="addToCart({{ $product->product_id }})" class="btn btn-dark" style="background-color: #d93d3d; border:none; margin-top: 20px;">Add to cart</button>
                                    </div>

                                    <div class="text-center mt-3">
                                        <a href="{{ url('/') }}" class="btn btn-dark" role="button">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Including jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>

     // Quantity control functionality
     $(document).ready(function() {
        let quantityInput = $('#quantity');

        $('#increment').on('click', function() {
            let currentVal = parseInt(quantityInput.val());
            quantityInput.val(currentVal + 1);
        });

        $('#decrement').on('click', function() {
            let currentVal = parseInt(quantityInput.val());
            if (currentVal > 1) {
                quantityInput.val(currentVal - 1);
            }
        });
    });

    // Add to Cart button functionality
    function addToCart(productId) {
        let quantity = $('#quantity').val();

        $.ajax({
            url: '{{ route("cart.add") }}',
            method: 'POST',
            data: {
                id: productId, // Send only the product ID
                quantity: quantity,
                _token: '{{ csrf_token() }}' // Include CSRF token for security
            },
            success: function(response) {
                alert(response.message); // Show success message
            },
            error: function(xhr) {
                alert('Error: ' + xhr.responseJSON.message); // Show error message
            }
        });
    }
</script>
@endsection
