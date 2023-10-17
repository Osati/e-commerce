@extends('back-end.master')
@section('title')
    new-cars details
@endsection

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
                                <th>Market Price</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach($newcars as $newcar)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $newcar->title }}</td>
                                    <td>{{ $newcar->category_name }}</td>
                                    <td>{{ $newcar->author_name }}</td>
                                    <td>${{ $newcar->product_mrp }}/-</td>
                                    <td>
                                        <img src="{{ $newcar->image }}" style="width: 50px">
                                    </td>
                                    <td>{{ $newcar->status ==1 ? 'Active' : 'Inactive' }}</td>
                                    <td>
                                        <a href="{{ route('newcars.edit',$newcar->id) }}" class="btn btn-success">edit</a>
                                        @if($newcar->status==1)
                                            <a href="{{ route('newcars.show',$newcar->id) }}" class="btn btn-success">Inactive</a>
                                        @else
                                            <a href="{{ route('newcars.show',$newcar->id) }}" class="btn btn-success">Active</a>
                                        @endif
                                        <form action="{{route('newcars.destroy',$newcar->id)}}" method="post">

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
