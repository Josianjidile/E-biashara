@extends('layouts.admin')

@section('content')
<div class="card">
<div class="card-header">
    <h4>Add Category</h4>
     </div>
    <div class="card-body">
    <form action="{{route('insert-category')}}" method="POST" enctype="multipart/form-data">
                  @csrf
        <div class="row">
              <div class="col-md-6 mb-3">
        <label for="name"> Name: </label>
            <input type="text" name="name"  class="form-control"/>                
             </div>
             <div class="col-md-6 mb-3">
        <label for="slug">Slug: </label>
            <input type="text" name="slug"  class="form-control"/>                
             </div>
             <div class="col-md-12 mb-3">
        <label for="description">Description: </label>
            <textarea name="description" class="form-control" > </textarea>               
             </div>
             <div class="col-md-6 mb-3">
        <label for="status"> Status: </label>
            <input type="checkbox" name="status"/>                
             </div>
             <div class="col-md-6 mb-3">
        <label for="popular"> Popular: </label>
            <input type="checkbox" name="popular"/>                
             </div>
             <div class="col-md-12 mb-3">
        <label for="meta_title"> Meta title: </label>
            <input type="text"  name="meta_title" class="form-control"/>                
             </div>
             <div class="col-md-12 mb-3">
        <label for="meta_keywords"> Meta keywords: </label>
            <input type="text" name="meta_keywords"  class="form-control"/>                
             </div>
            
             <div class="col-md-12 mb-3">
        <label for="meta_description"> Meta description: </label>
            <input type="text" name="meta_description"  class="form-control"/>                
             </div>
             <div class="col-md-12">
             <label for="image">Category Image:</label>
                <input type="file" name="image" class="form-control"/>                
             </div>
             <div class="col-md-12">
                <button type ="submit" class="btn btn-primary"  >Submit</button>               
             </div>
          </form> 
             
</div>
</div>
@endsection

