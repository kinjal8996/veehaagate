@extends('frontend.layout.main')

@section('main-container')
    <h1>Search Results for "{{ $query }}"</h1>

    @if($products->count() > 0)
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-3">
                    <div class="product-card" style="border: 1px solid #ddd; padding: 20px; background-color: #f9f9f9; border-radius: 10px; margin-top:10px; margin-bottom:10px;">
                        <img src="{{ asset('productsimg/' . $product->image) }}" alt="{{ $product->name }}" style="max-width: 100%;">
                        <h4>{{ $product->name }}</h4>
                        <p>{{ $product->price }} USD</p>
                        <a href="{{ route('product.show', $product->product_id) }}" class="btn btn-primary" style="background-color: black; color:white; height: 38px; width: 110px; border: none; border-radius: 5px;">View Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>No products found.</p>
    @endif
@endsection
