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
                <label for="fullname">Title :</label>
                <input type="text"  class="form-control" name="title" value="{{ $blog->title }}" required>
                <label for="fullname">Category :</label>
                <select type="text"  class="form-control" name="category_id">
                    <option>Please Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                               {{ $category->id==$blog->category_id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                    @endforeach
                </select>
                <label for="fullname">Author Name :</label>
                <input type="text"  class="form-control" name="author_name" value="{{ $blog->author_name }}" required>
                <label for="fullname">Description :</label>
                <textarea type="text"  class="form-control" name="description" required>{{ $blog->description }}</textarea>
                <label for="fullname">MRP :</label>
                <input type="text"  class="form-control" name="product_mrp" value="{{ $blog->product_mrp }}" required>
                <label for="fullname">Image :</label>
                <input type="file"  class="form-control" name="image" value="{{ $blog->image }}" accept="image/*">
                <img src="{{ asset($blog->image) }}" style="width: 50px">
                <button type="submit" name="submit" class="form-control mt-1">Save Info</button>
            </form>
        </div>
    </div>
@endsection
