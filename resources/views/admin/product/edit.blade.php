@extends('layouts.admin')

@section('content')
<div class="card">
<div class="card-header">
    <h4>Edit/Update Products</h4>
     </div>
    <div class="card-body">
    <form action="{{url('update-product/'.$products->id)}}" method="POST" enctype="multipart/form-data">
                  @method('PUT')
                  @csrf
        <div class="row">
        <div class="col-md-12 mb-3"> 
            <select class="form-select"> 
                <option value="">{{$products->category->name}}</option>
            </select>
            </div>
              <div class="col-md-6 mb-3">
        <label for="name"> Name: </label>
            <input type="text" name="name"  value="{{$products->name}}" class="form-control"/>                
             </div>
             <div class="col-md-6 mb-3">
        <label for="slug">Slug: </label>
            <input type="text" name="slug" value="{{$products->slug}}"   class="form-control"/>                
             </div>
             <div class="col-md-12 mb-3">
        <label for="small_description">Small Description: </label>
            <textarea name="small_description" row="3" class="form-control" value=""> {{$products->small_description}}"   </textarea>               
             </div>
             <div class="col-md-12 mb-3">
        <label for="description"> Description: </label>
        <textarea name="description" row="3" value=""  class="form-control">{{$products->description}} </textarea>               
             </div>
             <div class="col-md-6 mb-3">
        <label for="original_price"> Original Price: </label>
            <input type="number"  class="form-control" value="{{$products->original_price}}"  name="original_price"/>                
             </div>
             <div class="col-md-6 mb-3">
        <label for="selling_price"> Selling Price: </label>
            <input type="number"  class="form-control" value="{{$products->selling_price}}"  name="selling_price"/>                
             </div>
             <div class="col-md-6 mb-3">
        <label for="tax"> Tax: </label>
            <input type="number"  class="form-control" value="{{$products->tax}}"  name="tax"/>                
             </div>
             <div class="col-md-6 mb-3">
        <label for="qty"> Quantity: </label>
            <input type="number" class="form-control" value="{{$products->qty}}"  name="qty"/>                
             </div>
             <div class="col-md-6 mb-3">
        <label for="status"> Status: </label>
            <input type="checkbox" {{$products->status=="1" ? 'checked' :''}}  name="status"/>                
             </div>
             <div class="col-md-6 mb-3">
        <label for="trending"> Trending: </label>
            <input type="checkbox" {{$products->trending=="1"  ? 'checked':''}}   name="trending"/>                
             </div>
             <div class="col-md-12 mb-3">
        <label for="meta_title"> Meta title: </label>
            <input type="text"  name="meta_title" value="{{$products->meta_title}}"  class="form-control"/>                
             </div>
             <div class="col-md-12 mb-3">
        <label for="meta_keywords"> Meta keywords: </label>
        <textarea  name="meta_keywords" row="3" value=""  class="form-control">{{$products->meta_keywords}}</textarea>              
             </div>
            
             <div class="col-md-12 mb-3">
        <label for="meta_description"> Meta description: </label>
        <textarea name="meta_description" row="3" value=""  class="form-control">{{$products->meta_description}}</textarea>               
             </div>
             @if($products->image)
             <img src="{{asset('assets/uploads/products/'.$products->image)}}" alt="product image">
             @endif
             <div class="col-md-12">
             <label for="image"> Produt image: </label>
                <input type="file"  name="image" class="form-control"/>                
             </div>
             <div class="col-md-12">
                <button type ="submit" class="btn btn-primary"  >Update</button>               
             </div>
          </form> 
             
</div>
</div>
@endsection