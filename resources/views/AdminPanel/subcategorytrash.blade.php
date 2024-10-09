@extends('AdminPanel.layout.main')

@section('main-container')
<div class='mt-3 container'>
    <h3>SubCategories Trash  Detail</h3>
    <hr>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <div class="d-flex">

                <a href="{{ url('/Adminsubcategory') }}">
                    <button class="btn btn-dark ml-2">
                        View Subcategories Detail</button>
                </a>
            </div>
        </div>
    </nav>


    <div class="card mt-2" style="width: 100%; overflow-x: auto;">
        <div class="card-body">
            <div class="table-responsive text-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 10%;">Subcategory Id</th>
                            <th style="width: 10%;">Category</th>
                            <th style="width: 15%;">Name</th>
                            <th style="width: 50%;">Description</th>
                            <th style="width: 10%;">Created At</th>
                            <th style="width: 10%;">Updated At</th>
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
                                <a href="{{route('subcategory.forcedelete',['id'=>$subcat->subcategory_id])}}">
                                    <button class="btn btn-danger">Delete</button>
                                    </a>
                            </td>
                            <td>
                                    <a href="{{route('subcategory.restore',['id'=>$subcat->subcategory_id])}}">
                                      <button class="btn btn-primary">Restore</button>
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
