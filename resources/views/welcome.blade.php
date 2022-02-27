@extends('layouts/app')

@section('title', 'PT.Musang')

@section('content')

    <div id="bannerimage"class="container banner ">
    <div style="background-image">
        <h1>WELCOME TO OUR LIBRARY</h1>
        <p>Your place to look find books and manage the books</p>
        <a href="" class="btn btn-warning">Manage Book</a>
        <a href="" class="btn btn-info">Contact Us</a>
        
    </div>
    </div>
 
    <div class="container mt-4">
        <div class="row">
            @foreach ($books as $book)
                <div class="col-md-4">
                    <div class="col-md-12 bg-primary book-content">
                        <h1 class="title">{{ $book->title }}</h1>
                        <span class="author badge bg-info">{{ $book->author}}</span>
                        <p class="page">{{ $book->page}}</p>
                        <span class="release-year">Released Year:{{ $book->release_year}}</span>
                    </div>
                </div>
             @endforeach
        </div>
    </div>


@endsection
