@extends('layouts/app')

@section('title', 'Halaman Books')

@section('content')

<div class="container mt-4">
    <h3><i class="uil uil-airplay me-1"></i>Books</h3>
    <hr>
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
