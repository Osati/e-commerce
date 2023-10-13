@extends('back-end.master')

@section('content')
    <div class="container-fluid">

        <div class="col-md-8 mt-5">
            <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="fullname">Title :</label>
                <input type="text"  class="form-control" name="title"/>

                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror

                <label for="fullname">Category :</label>
                <select type="text"  class="form-control" name="category_id">

                    <option>Please Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

                <label for="fullname">Author Name :</label>
                <input type="text"  class="form-control" name="author_name"/>
                <label for="fullname">Description :</label>
                <textarea type="text"  class="form-control" name="description"></textarea>
                <label for="fullname">Image :</label>
                <input type="file"  class="form-control" name="image" accept="image/*"/>
                <label for="fullname">MRP :</label>
                <input type="text"  class="form-control" name="product_mrp"/>

                <button type="submit" name="submit" class="form-control btn btn-success mt-1">Save Info</button>
            </form>
        </div>
    </div>
@endsection
