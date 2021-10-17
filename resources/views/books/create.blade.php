@extends('layouts.app')
// шаблон на создиние и обновление это один и тот же лейаут. просто в одном случае есть сущность а в другом ее нет
// и ты в темплейте проверяешь есть ли сущность и показываешь ее поля в инпутах
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form action="/book" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Book Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Book Body</label>
                            <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
