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
                        <form action="/book/@isset($book){{$book->id}}@endisset" method="Post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Post Title</label>
                                <label>
                                    <input type="text" name="title" class="form-control" value="@isset($book){{$book->title}}@endisset">
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="">Post Body</label>
                                <textarea name="body" id="" cols="30" rows="10"
                                          class="form-control">@isset($book){{$book->body}}@endisset</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
