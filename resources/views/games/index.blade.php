@extends('layouts.app')

@section('title','Manage Book')

@section('content')

 <div class="container">
     <div class="col-md-8 bg-light manage-wrapper">
         <h1>Manage book<i class="uil uil-airplay ms-1"></i></h1>
         <hr>
         <a href="{{ url('books/create')}}" class= "btn btn-dark btn-sm" >add Books</a>

         @if(session()->has('success'))
          <div class="alert alert-success" role="alert"> 
            {{ session('success')}}
          </div>
           

         @endif

        <table class="table">
            <thead>
              <tr>
                <th >#</th>
                <th>Title</th>
                <th>Author</th>
                <th>Pages</th>
                <th>Realeased Year</th>
                <th>Action</th>

              </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $book->title}}</td>
                    <td>{{ $book->author}}</td>
                    <td>{{ $book->page}}</td>
                    <td>{{ $book->release_year}}</td>
                    <td>
                      <a href="{{ url('books/' . 
                      $book->id)}}" class="text-primary"><i class="uil uil-edit"></i>"

                      <a href="#" class="text-danger"
                      onclick="event.preventDefault();document.getElementById ('delete-form-{{ $book->id}}').submit();">
                      <i class="uil uil-trash-alt"></i>
                        <form id="delete-form-{{$book->id}}"
                          action="{{  url('book/'. $book->id)}}"
                          method="POST"
                          style="display: none;">
                          @csrf
                          @method('DELETE')

                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
     </div>
 </div>
    
@endsection

