@extends('layouts.app')
@section('title', 'カテゴリ')
@section('head')
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/Article-List.css">
    <link rel="stylesheet" href="/assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="/assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
@endsection

@section('content')
<div class="article-list">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">List</h2>
        </div>
    </div>
</div>
<div class="article-list">
    <div class="container">
        <div class="intro"></div>
        <div class="row articles">
            @foreach($posts as $post)
            <div class="col-sm-6 col-md-4 item"><a href="/detail/{{$post->id}}"><img class="img-fluid" src="{{$post->images[0]->image_url}}"></a>
                <h3 class="name"><strong>{{$post->title}}</strong><br></h3>
                <p class="description">{{str_limit($post->detail, $limit=150, $end='...')}}</p>
                <a href="/detail/{{$post->id}}" class="action"><i class="fa fa-arrow-circle-right"></i></a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
