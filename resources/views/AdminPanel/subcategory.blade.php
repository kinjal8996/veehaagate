@extends('AdminPanel.layout.main')

@section('main-container')
<div class='mt-3 container'>
    <h3>Subcategories</h3>
    <hr>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <form class="d-flex" action="">
                <input class="form-control me-5 mr-sm-2" type="search" value="{{$search}}" name="search"
                placeholder="Search by name" aria-label="Search" style="width: 500px;">
                <button class="btn btn-dark">Search</button>
                <span style="margin-left: 10px;">
                    <a href="{{url('/Adminsubcategory')}}">
                        <button class="btn btn-dark" type="button">Reset</button>
                    </a>
                </span>
            </form>
            <div class="d-flex">
                <button type="button" onclick="window.location='{{ url('/Adminsubcategoryform') }}'" class="btn btn-dark btn-circle font-rights me-2">
                    <i class="bi bi-plus"></i> Add
                </button>
                <a href="{{ url('/Adminsubcategorytrash') }}">
                    <button class="btn btn-danger ml-2">
                        Trashed Data
                    </button>
                </a>
            </div>
        </div>
    </nav>

    <div class="card mt-2"  style="width: 100%; overflow-x: auto;">
        <div class="card-body">
            <div class="table-responsive text-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 10%;">Subcategory Id</th>
                            <th style="width: 10%;">Category</th>
                            <th style="width: 25%;">Name</th>
                            <th style="width: 10%;">Created_at</th>
                            <th style="width: 10%;">Updated_at</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subcategory as $subcat )
                        <tr>
                            <td>{{$subcat->subcategory_id}}</td>
                            <td>{{ $subcat->category ? $subcat->category->name : 'N/A' }}</td>
                            <td>{{$subcat->name}}</td>
                            <td>{{$subcat->created_at}}</td>
                            <td>{{$subcat->updated_at}}</td>
                            <td>
                                <a href="{{route('subcategory.edit',['id'=>$subcat->subcategory_id])}} ">
                                  <button class="btn btn-primary">Update</button>
                                </a>
                                </td>
                            <td>
                                <a href="{{route('subcategory.delete',['id'=>$subcat->subcategory_id])}}">
                                <button class="btn btn-danger">Delete</button>
                                </a>
                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

   </div>
@endsection
