@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Book</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <img src="{{ $book->img_source }}" alt="">
                        <h2>{{$book->title}}</h2>
                        <br>
                        <div>
                            {{$book->body}}
                        </div>
                    </div>
                </div>
                <a href="{{$book->id}}/edit" class="btn btn-primary">Edit</a>
                <form action="{{$book->id}}" method="post" class="d-inline">
                    {{ csrf_field() }}
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
