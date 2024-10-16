@extends('Frontend.Layout.main')

@section('main-container')
{{-- <div class="container">
    <h1>{{ $categories->name }}</h1>
    <div class="row">
        @if($products->count() > 0)
            @foreach($products as $product)
                <div class="col-md-3">
                    <div class="product-card">
                        <img src="{{ asset('productsimg/' . $product->image) }}" alt="{{ $product->name }}" class="img-responsive">
                        <h4>{{ $product->name }}</h4>
                        <p>{{ $product->price }} USD</p>
                        <a href="{{ route('product.show', $product->product_id) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            @endforeach
        @else
            <p>No products found in this category.</p>
        @endif
    </div>
</div>

</div> --}}
<div class="container">
    <h1>{{ $categories->name }}</h1>
    <div class="row">
        @if($products->count() > 0)
            @foreach($products as $product)
                <div class="col-md-3">
                    <div class="product-card" style="border: 1px solid #ddd; padding: 20px; background-color: #f9f9f9; border-radius: 10px; text-align: center; height: 350px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); margin-top:15px; margin-bottom:15px;">
                        <img src="{{ asset('productsimg/' . $product->image) }}" alt="{{ $product->name }}" class="img-responsive" style="height: 160px; width: 200px; margin: 0 auto; display: block;">
                        <h4 style="font-size: 18px; color: #333; margin: 15px 0;">{{ $product->name }}</h4>
                        <p style="font-size: 16px; color: #555; margin: 10px 0;">{{ $product->price }} USD</p>
                        <a href="{{ route('product.show', $product->product_id) }}" class="btn btn-primary" style="background-color: #333; border-color: #333; color: #fff; padding: 10px 15px; font-size: 14px; text-transform: uppercase; margin-top: auto; text-decoration: none; border-radius: 5px;">View Details</a>
                    </div>
                </div>
            @endforeach
        @else
            <p>No products found in this category.</p>
        @endif
    </div>
</div>

@endsection
