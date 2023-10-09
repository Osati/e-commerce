@extends('back-end.master')

@section('content')
    <div class="container-fluid">

        <div class="col-md-8 mt-5">
            <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="fullname">Title :</label>
                <input type="text"  class="form-control" name="title" required />
                <label for="fullname">Category :</label>
                <select type="text"  class="form-control" name="category_id">
                    <option>Please Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
                <label for="fullname">Author Name :</label>
                <input type="text"  class="form-control" name="author_name" required />
                <label for="fullname">Description :</label>
                <textarea type="text"  class="form-control" name="description" required></textarea>
                <label for="fullname">Image :</label>
                <input type="file"  class="form-control" name="image" accept="image/*" required />
                <button type="submit" name="submit" class="form-control mt-1">Save Info</button>
            </form>
        </div>
    </div>
@endsection
