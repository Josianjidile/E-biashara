@extends('layouts.admin')

@section('content')
<div class="card">
<div class="card-header">
    <h4>Edit/Update Category</h4>
     </div>
    <div class="card-body">
    <form action="{{url('update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
                   @method('PUT')
                       @csrf
                  
        <div class="row">
              <div class="col-md-6 mb-3">
        <label for="name"> Name: </label>
            <input type="text" value="{{$category->name}}" name="name"  class="form-control"/>                
             </div>
             <div class="col-md-6 mb-3">
        <label for="slug">Slug: </label>
            <input type="text" value="{{$category->slug}}" name="slug"  class="form-control"/>                
             </div>
             <div class="col-md-12 mb-3">
        <label for="description"> Description: </label>
        <textarea name="description" row="3" value=""  class="form-control">{{$category->description}} </textarea>               
             </div>
             <div class="col-md-6 mb-3">
        <label for="status"> Status: </label>
            <input type="checkbox"  name="status"  {{$category->status =="1"? 'checked':''}}/>                
             </div>
             <div class="col-md-6 mb-3">
        <label for="popular"> Popular: </label>
            <input type="checkbox"  name="popular"  {{$category->popular =="1"? 'checked':''}}/>                
             </div>
             <div class="col-md-12 mb-3">
        <label for="meta_title"> Meta title: </label>
            <input type="text"  value="{{$category->meta_title}}" name="meta_title" class="form-control"/>                
             </div>
             <div class="col-md-12 mb-3">
        <label for="meta_keywords"> Meta keywords: </label>
        <textarea  name="meta_keywords" row="3" value=""  class="form-control">{{$category->meta_keywords}}</textarea>              
             </div>
            
             <div class="col-md-12 mb-3">
        <label for="meta_description"> Meta description: </label>
            <input type="text" value="{{$category->meta_description}}" name="meta_description"  class="form-control"/>                
             </div>
             @if($category->image)
             <img src="{{asset('assets/uploads/category/'.$category->image)}}" alt="category image">
             @endif
             <div class="col-md-12">
             <label for="image">Category image: </label>
                <input type="file" name="image" class="form-control"/>                
             </div>

             <div class="col-md-12">
                <button type ="submit" class="btn btn-primary">Update</button>               
             </div>
          </form> 
             
</div>
</div>
@endsection

