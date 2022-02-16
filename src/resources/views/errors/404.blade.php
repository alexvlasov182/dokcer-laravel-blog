@extends('layouts.layout', ['title' =>  "404 ошибка. Вы попали не туда"])

@section('content')
    <div class="card">
        <h2 class="card-header">404 Page not Found</h2>
        <img src="{{asset('img/docker-1.png')}}" alt="404">
    </div>
    <a href="/" class="btn btn-outline-primary">Вернуться на главную</a>
@endsection