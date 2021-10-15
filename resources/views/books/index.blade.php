@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <a href="/book/create" class="btn btn-primary mb-2">Add Book</a>
                <br>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Image</th>
                        <th>Body</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td><a href="/book/{{$book->id}}">{{ $book->title }}</a></td>
                            <td><a href="/author/{{$book->author->id}}">{{ $book->author->name }}</a></td>
                            <td><img src="{{ $book->img_source }}" alt=""></td>
                            <td>{{ $book->body }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
