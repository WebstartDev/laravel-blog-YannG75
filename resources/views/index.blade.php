<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('head.head')
    <title>Blog</title>
</head>
<body>
@include('head.header')
<main class="container">
    <section class="last_article w-100 d-flex mb-5">
        <article class="d-flex flex-column justify-content-around align-items-center bg-white position-relative h-75">
            <span class="categoryColor"><b>{{$lastArticle->category->name}}</b></span>

            <h3 class="font-weight-bold">{{$lastArticle->title}}</h3>
            <small> {{$lastArticle->created_at->diffForHumans()}}</small>

            <p>{{$lastArticle->summary}}</p>

            <a href="/article/{{$lastArticle->id}}" style="z-index: 3">
                <button class="btn">Read More</button>
            </a>

        </article>
    </section>

    <section class="categories d-flex mb-5">
        @foreach($categories as $category)

            <a href="/category/{{$category->id}}" class="categoryContainer text-decoration-none position-relative"
               style="background: url('https://picsum.photos/50{{$category->id}}')center no-repeat">
                <div class="category">
                    {{$category->name}}
                </div>
            </a>
        @endforeach

    </section>

    <section class="d-flex">
        <div class="articlesContainer d-flex justify-content-around flex-wrap m-0">
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
                    <span class="categoryColor"><b>{{$article->category->name}}</b></span>
                    <h3>{{$article->title}} </h3>
                    <em>by {{$article->user->name}}</em>
                    <small> {{$article->created_at->diffForHumans()}}</small>
                    <p>{{$article->summary}}</p>
                    <a href="/article/{{$article->id}}" style="z-index: 3">
                        <button class="btn">Read More</button>
                    </a>
                </article>
            @endforeach
        </div>
        <div class=" authors m-0 ">

            @foreach($users as $user)
                <article class="authorContainer d-flex flex-column justify-content-around align-items-center mb-3">
                    <div class="about">
                        <img width="100%" src="https://source.unsplash.com/random/500x50{{$user->id}}/?people" alt="">
                    </div>
                    <span class="user ">{{$user->name}}</span>
                    <a href="/user/{{$user->id}}" style="z-index: 3">
                        <button class="btn">More Articles</button>
                    </a>
                </article>
            @endforeach
        </div>
    </section>

</main>

</body>
</html>
