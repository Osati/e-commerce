@extends('back-end.master')
@section('title')
    new-car-add
@endsection

@section('content')

    <div class="container-fluid">
        <div class="col-md-8 mt-5">
            <form action="{{ route('newcars.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="fullname">New-Title :</label>
                <input type="text"  class="form-control" name="title"/>
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror

                <label for="fullname">Category :</label>
                <input type="text"  class="form-control" name="category_name"/>
                @error('category_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

                <label for="fullname">Author Name :</label>
                <input type="text"  class="form-control" name="author_name"/>
                @error('author_name')
                <div class="text-danger">{{ $message }}</div>
                @enderror

                <label for="fullname">Description :</label>
                <textarea type="text"  class="form-control" name="description"></textarea>
                @error('description')
                <div class="text-danger">{{ $message }}</div>
                @enderror

                <label for="fullname">Image :</label>
                <input type="file"  class="form-control" name="image" accept="image/*"/>
                @error('image')
                <div class="text-danger">{{ $message }}</div>
                @enderror

                <label for="fullname">MRP :</label>
                <input type="text"  class="form-control" name="product_mrp"/>
                @error('product_mrp')
                <div class="text-danger">{{ $message }}</div>
                @enderror

                <button type="submit" name="submit" class="form-control btn btn-success mt-1">Save Info</button>
            </form>
        </div>
    </div>

@endsection
