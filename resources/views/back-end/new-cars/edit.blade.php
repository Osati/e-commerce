@extends('back-end.master')
@section('title')
    newcar-edit
@endsection

@section('content')
    <div class="container-fluid">

        <div class="col-md-8 mt-5">
            <form action="{{ route('newcars.update',$newcar->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{$newcar->id}}">
                <label for="fullname" class="text-dark">Title :</label>
                <input type="text"  class="form-control" name="title" value="{{ $newcar->title }}">
                @error('title')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                <label for="fullname" class="text-dark">Category :</label>
                <input type="text"  class="form-control" name="category_name" value="{{ $newcar->category_name }}">

                @error('category_name')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                <label for="fullname" class="text-dark">Author Name :</label>
                <input type="text"  class="form-control" name="author_name" value="{{ $newcar->author_name }}">
                @error('author_name')
                <p class="text-danger">{{$message}}</p>
                @enderror

                <label for="fullname" class="text-dark">Description :</label>
                <textarea type="text"  class="form-control" name="description" required>{{ $newcar->description }}</textarea>
                @error('description')
                <p class="text-danger">{{$message}}</p>
                @enderror

                <label for="fullname" class="text-dark">MRP :</label>
                <input type="text"  class="form-control" name="product_mrp" value="{{ $newcar->product_mrp }}">
                @error('product_mrp')
                <p class="text-danger">{{$message}}</p>
                @enderror

                <label for="fullname" class="text-dark">Image :</label>
                <input type="file"  class="form-control" name="image" value="{{ $newcar->image }}" accept="image/*">
                @error('image')
                <p class="text-danger">{{$message}}</p>
                @enderror

                <img src="{{ asset($newcar->image) }}" style="width: 50px">

                <button type="submit" name="submit" class="form-control btn-success mt-1">Save Info</button>
            </form>
        </div>
    </div>
@endsection
