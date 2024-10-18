@extends('frontend.layout.main')
@section('main-container')

   @php
   $banners = \App\Models\Banner::all();
 @endphp

@include('frontend.banner')
   @php
   $products = \App\Models\Product::all();
 @endphp

 @php
   $categories = \App\Models\Category::all();
 @endphp

   @include('frontend.allproducts')








  @include('frontend.explorenewarrival')









@endsection
