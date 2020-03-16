<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('head.head')
    <title>Article de  {{$articles[0]->user->name}}</title>
</head>
<body>
@include('head.header')
<h1 class="text-center mb-5"><em class="categoryColor">{{$articles[0]->user->name}}'s</em>  Articles :</h1>
<section class="container">
    <div class=" d-flex justify-content-around flex-wrap m-0">
        @foreach($articles as $article)
            <article
                class=" article text-center d-flex shadow-sm flex-column justify-content-around align-items-center mb-3 p-3">
                <div class="articleImg">
                    @if($article->id < 10)
                        <img width="100%" src="https://picsum.photos/40{{$article->id}}" alt="">
                    @else
                        <img width="100%" src="https://picsum.photos/4{{$article->id}}" alt="">
                    @endif
                </div>
                <a href="/category/{{$article->category->id}}" class="text-decoration-none"><span class="categoryColor"><b>{{$article->category->name}}</b></span></a>
                <h3>{{$article->title}} </h3>
                <small> {{$article->created_at->diffForHumans()}}</small>
                <p>{{$article->summary}}</p>
                <a href="/article/{{$article->id}}" style="z-index: 3">
                    <button class="btn">Read More</button>
                </a>
            </article>
        @endforeach
    </div>
</section>
</body>
</html>
