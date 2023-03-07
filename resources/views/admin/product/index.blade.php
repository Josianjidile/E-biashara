@extends('layouts.admin')

@section('content')


    <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Product page</h4>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>ID</th>
                                            <th>Category</th>
                                            <th>Name</th>
                                            <th>selling price</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $item )
                                            <tr>
                                                <td>{{ $item->id}}</td>
                                                <td>{{ $item->category->name}}</td>
                                                <td>{{ $item->name}}</td>
                                                <td>{{ $item->selling_price}}</td>
                                                <td>
                                                    <img src="{{asset('assets/uploads/products/'.$item->image)}}" class="cate-image" alt="image here">
                                                </td>
                                                <td>
                                                    <a  href="{{url('edit-product/'.$item->id)}}" class="btn btn-success btn-sm">Edit</a>
                                                    <a  href="{{url('delete-product/'.$item->id)}}" class="btn btn-danger btn-sm" >Delete</a>
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