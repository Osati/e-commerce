@extends('back-end.master')

@section('content')
    <div class="container-fluid">

        <div class="col-md-8 mt-5">
            <form action="{{ route('categories.update',$category->id) }}" method="post">
                @csrf
                @method('PUT')
                <label for="fullname">Category name :</label>
                <input type="text"  class="form-control" name="category_name" value="{{ $category->category_name }}" required />
                <button type="submit" name="submit" class="mt-1">Submit</button>
            </form>
        </div>
    </div>
@endsection
