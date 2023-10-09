@extends('back-end.master')

@section('content')

    <div class="container body">
        <div class="container-fluid">
            <!-- page content -->
            <div class="row">
                <div class="col-sm-10">
                    <div class="card-box table-responsive">
                        <p class="text-muted font-13 m-b-30">
                            DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                        </p>
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Author Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach($blogs as $blog)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ $blog->category->category_name }}</td>
                                    <td>{{ $blog->author_name }}</td>
                                    <td>{{ $blog->description }}</td>
                                    <td>
                                        <img src="{{ $blog->image }}" style="width: 50px">
                                    </td>
                                    <td>{{ $blog->status ==1 ? 'Active' : 'Inactive' }}</td>
                                    <td>
                                        <a href="{{ route('blogs.edit',$blog->id) }}" class="btn btn-success">edit</a>
                                        @if($blog->status==1)
                                            <a href="{{ route('blogs.show',$blog->id) }}" class="btn btn-success">Inactive</a>
                                        @else
                                            <a href="{{ route('blogs.show',$blog->id) }}" class="btn btn-success">Active</a>
                                        @endif
                                        <form action="{{route('blogs.destroy',$blog->id)}}" method="post">

                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-success p-2">delete</button>

                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
    </div>
    </div>

@endsection
