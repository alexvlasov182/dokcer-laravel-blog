@extends('layouts.layout', ['title' => 'Главная страница'])

@section('content')

@if(isset($_GET['search']))
    @if(count($posts) > 0)
        <h2>Результаты поиска по запросу "<?php echo htmlspecialchars($_GET['search'])?>" </h2>
        <p class="lead">Всего найдено {{count($posts)}} постов</p>
    @else
        <h2>По запросу "<?php echo htmlspecialchars($_GET['search'])?>" ничего не найдено</h2>
        <a href="{{route('post.index')}}">Отобразить все посты</a>
    @endif
@endif

<div class="row">
    @foreach($posts as $post)
        <div class="col-6">
            <div class="card">
                <div class="card-header"><h2>{{ $post->short_title }}</h2></div>
                <div class="card-body">
                    <div class="card-img"
                         style="background-image: url({{$post->img ?? asset('img/docker.png')}})"></div>
                    <div class="card-author">{{$post->name}}</div>
                    <a href="{{route('post.show', ['id' => $post->post_id])}}" class="btn btn-outline-primary">Посмотреть пост</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@if(!isset($_GET['search']))
    {{$posts->links( )}}
@endif

@endsection