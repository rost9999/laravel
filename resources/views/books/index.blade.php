@extends('layouts.app')
@php /** @var App\Models\Book $books */ @endphp

@section('content')
    <div class="container">
        <a href="/book/create" class="btn btn-primary mb-2">Add Book</a>
        @foreach($books as $book)
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ $book->image }}" class="img-fluid rounded-start" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><a href="/book/{{$book->id}}">{{ $book->title }}</a></h5>
                            <p class="card-text">{{($book->body) }}</p>
                            <p class="card-text"><small class="text-muted"><a
                                        href="/author/{{$book->author->id}}">{{ $book->author->name }}</a></small></p>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach
    </div>
@endsection
