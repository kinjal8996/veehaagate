@extends('AdminPanel.layout.main')

@section('main-container')
<div class="card  mt-3 mx-auto" style="width:50rem; height:20rem;">

    <div class="card-header mt-2">
        <h3>{{$title}}</h3>
    </div>

        <div class="card-body">

                <form action="{{url($url)}}" method="POST">
                @csrf

                {{-- @if(empty($subcategory->category_id)) --}}
                <div class="mb-3" >
                    <label class="form-label">Category Name:</label>
                    <select name="category" class="form-select" data-live-search="true"
                    aria-label="Default select example">
                        <option selected disabled>Select Category</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->category_id }}"
                            @if ($category->category_id == $subcategory->category_id) selected @endif>
                            {{ $category->name }}
                        </option>
                        {{-- <option value="{{ $category->category_id }}">{{ $category->name }}</option> --}}
                        @endforeach
                    </select>
                    @error('category')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{-- @endif --}}

                <div class="mb-3">
                    <label class="form-label">Name:</label>
                    <input type="text" name="name" class="form-control" value="{{$subcategory->name}}"/>
                    @error('name')
                     <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
            </form>
        </div>


</div>
@endsection
