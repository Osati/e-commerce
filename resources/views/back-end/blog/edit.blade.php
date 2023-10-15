@extends('back-end.master')
@section('title')
    blogs-edit
@endsection

@section('content')
    <div class="container-fluid">

        <div class="col-md-8 mt-5">
            <form action="{{ route('blogs.update',$blog->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label for="fullname" class="text-dark">Title :</label>
                <input type="text"  class="form-control" name="title" value="{{ $blog->title }}">
                @error('title')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                <label for="fullname" class="text-dark">Category :</label>
                <select type="text"  class="form-control" name="category_id">
                    <option>Please Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                               {{ $category->id==$blog->category_id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                <label for="fullname" class="text-dark">Author Name :</label>
                <input type="text"  class="form-control" name="author_name" value="{{ $blog->author_name }}">
                @error('author_name')
                <p class="text-danger">{{$message}}</p>
                @enderror

                <label for="fullname" class="text-dark">Description :</label>
                <textarea type="text"  class="form-control" name="description" required>{{ $blog->description }}</textarea>
                @error('description')
                <p class="text-danger">{{$message}}</p>
                @enderror

                <label for="fullname" class="text-dark">MRP :</label>
                <input type="text"  class="form-control" name="product_mrp" value="{{ $blog->product_mrp }}">
                @error('product_mrp')
                <p class="text-danger">{{$message}}</p>
                @enderror

                <label for="fullname" class="text-dark">Image :</label>
                <input type="file"  class="form-control" name="image" value="{{ $blog->image }}" accept="image/*">
                @error('image')
                <p class="text-danger">{{$message}}</p>
                @enderror

                <img src="{{ asset($blog->image) }}" style="width: 50px">

                <button type="submit" name="submit" class="form-control mt-1">Save Info</button>
            </form>
        </div>
    </div>
@endsection
