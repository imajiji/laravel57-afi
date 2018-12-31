@extends('layouts.app')

@section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>{{$post->title}}</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="/assets/css/Article-Clean.css">
    <link rel="stylesheet" href="/assets/css/Article-Dual-Column.css">
    <link rel="stylesheet" href="/assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="/assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
@endsection

@section('content')
    <div class="article-clean"></div>
    <div class="article-dual-column"></div>
    <div class="article-clean">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                    <div class="intro">
                        <h1 class="text-center">{{$post->title}}</h1><img class="img-fluid" src="{{$images[0]->image_url}}" style="width: 770px;"></div>
                    <div class="text">
                        <p>{{$post->detail}}</p>
                        <p><a href="{{$post->product_link}}" target="_blank">{{$post->product_link_text}}</a></p>
                        <h2>コメント</h2>
                        <p>{{$post->comment}}</p>
                        @foreach($images as $image)
                        <figure><img class="figure-img" src="{{$image->image_url}}">
                            <figcaption></figcaption>
                        </figure>
                        @endforeach
                        @if(count($tags) > 1)
                        <p>タグ：
                            @foreach($tags as $tag)
                            <a href="/tag/{{$tag->name}}">{{$tag->name}}</a>
                            @endforeach
                        </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
