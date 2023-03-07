@extends('layouts.admin')

@section('content')


    <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Category page</h4>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($category as $item )
                                            <tr>
                                                <td>{{ $item->id}}</td>
                                                <td>{{ $item->name}}</td>
                                                <td>{{ $item->description}}</td>
                                                <td>
                                                    <img src="{{asset('assets/uploads/category/'.$item->image)}}" class="cate-image" alt="image here">
                                                </td>
                                                <td>
                                                    <a  href="{{url('edit-category/'.$item->id)}}" class="btn btn-success">Edit</a>
                                                    <a  href="{{url('delete-category/'.$item->id)}}" class="btn btn-danger" >Delete</a>
                                                </td>
                                            </tr>
                                                
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                       
</div>
</div>
@endsection