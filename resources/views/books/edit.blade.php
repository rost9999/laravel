@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Post') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="/book/{{$book->id}}" method="Post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Post Title</label>
                                // у тебя input подсвечен желтеньким. и не случайно
                                // свяжешь лейбл и инпут и при нажалии на лейбл курсор встанет в инпут
                                <input type="text" name="title" class="form-control" value="{{$book->title}}">
                            </div>

                            <div class="form-group">
                                <label for="">Post Body</label>
                                <textarea name="body" id="" cols="30" rows="10"
                                          class="form-control">{{$book->body}}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
