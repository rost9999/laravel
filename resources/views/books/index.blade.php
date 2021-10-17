@extends('layouts.app')
// обрати внимание что с этой строкой иде знает что такое $books и подсвечивает тебе свойства в фориче ниже + они стали кликабельные
// ты не допустишь ошибок если иде тебя контролирует. это важно. убери эту строку и поймешь о чем я
@php /** @var App\Models\Book[] $books */ @endphp

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <a href="/book/create" class="btn btn-primary mb-2">Add Book</a>
                <br>
                // давай табличку превратим в ленту новостей. таблица это не удобно
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
