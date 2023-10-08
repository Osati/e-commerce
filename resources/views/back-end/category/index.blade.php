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
                                    <th>Category Name</th>
                                    <th>Status</th>
                                    <th>Create date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->category_name }}</td>
                                    <td>{{ $category->status ==1 ? 'Active' : 'Inactive' }}</td>
                                    <td>{{ date('F j, Y',$category->create_at) }}</td>
                                    <td>
                                        <a href="{{ route('categories.edit',$category->id) }}" class="btn btn-success">edit</a>
                                        @if($category->status==1)
                                            <a href="{{ route('categories.show',$category->id) }}" class="btn btn-success">Inactive</a>
                                        @else
                                            <a href="{{ route('categories.show',$category->id) }}" class="btn btn-success">Active</a>
                                        @endif
                                        <form action="{{route('categories.destroy',$category->id)}}" method="post">

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
