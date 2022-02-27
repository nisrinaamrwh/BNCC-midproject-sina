@extends('layouts/app')

@section('title', 'Add Book')
    
@section('content')
<div class="container">
    <div class="col-md-7 bg-light manage-wrapper">
        <h1>Manage book<i class="uil uil-airplay ms-1"></i></h1>
        <hr>
        <form action="{{ url('books/create')}}" method="POST">
          @csrf 
          
          <div class="mb-3">
              <label class="form-label">Title Book</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Insert Book Title" name="title" value="{{  old('title')}}">
              @error('title')
              <small class="text-danger">{{  $message  }}</small>   
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label">Author</label>
              <input type="text" class="form-control @error('author') is-invalid @enderror" placeholder="Insert Book Author" name="author" value="{{  old('author')}}">
              @error('author')
              <small class="text-danger">{{  $message  }}</small>   
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label @error('page') is-invalid @enderror">Pages</label>
              <input type="number" class="form-control" placeholder="Insert Book pages" name="page" value="{{  old('page')}}">
              @error('page')
              <small class="text-danger">{{  $message  }}</small>   
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label @error('release_year') is-invalid @enderror">Released Year</label>
              <input type="number" class="form-control" placeholder="Insert Book Released Year" name="release_year" value="{{  old('release_year')}}">
              @error('release_year')
              <small class="text-danger">{{  $message  }}</small>   
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
   
    
@endsection
