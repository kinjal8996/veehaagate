@extends('AdminPanel.layout.main')

@section('main-container')
<div class='mt-3 container'>
    <h3>Checkout And Payment Details</h3>
    <hr>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <form class="d-flex" action="">
                <input class="form-control me-5 mr-sm-2" type="search" value="{{$search}}" name="search"
                placeholder="Search by customer name" aria-label="Search" style="width: 500px;">
                <button class="btn btn-dark">Search</button>
                <span style="margin-left: 10px;">
                    <a href="{{url('/Adminorder')}}">
                        <button class="btn btn-dark" type="button">Reset</button>
                    </a>
                </span>
            </form>

        </div>
    </nav>


    <div class="card mt-2" style="width:65rem;">
        <div class="card-body">
            <div class="table-responsive text-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 10%;">No.</th>
                            <th style="width: 10%;">Customer</th>
                            <th style="width: 10%;">Order Id</th>
                            <th style="width: 10%;">Payment Id</th>
                            <th style="width: 10%;">Name</th>
                            <th style="width: 10%;">Email</th>
                            <th style="width: 10%;">Contact</th>
                            <th style="width: 10%;">Address</th>
                            <th style="width: 10%;">Pincode</th>
                            <th style="width: 10%;">City</th>
                            <th style="width: 10%;">State</th>
                            <th style="width: 10%;">Total Cost</th>
                            <th style="width: 10%;">Created At</th>
                            <th style="width: 10%;">Updated At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($checkout as $checkout )
                        <tr>
                            <td>{{$checkout->Id}}</td>
                            <td>{{$checkout->customer->name}}</td>
                            <td>{{$checkout->order_id}}</td>
                            <td>{{$checkout->payment_id}}</td>
                            <td>{{$checkout->name}}</td>
                            <td>{{$checkout->email}}</td>
                            <td>{{$checkout->contact_number}}</td>
                            <td>{{$checkout->address}}</td>
                            <td>{{$checkout->pincode}}</td>
                            <td>{{$checkout->city}}</td>
                            <td>{{$checkout->state}}</td>
                            <td>₹{{$checkout->total_price}}</td>
                            <td>{{$checkout->created_at}}</td>
                            <td>{{$checkout->updated_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


   </div>
@endsection
