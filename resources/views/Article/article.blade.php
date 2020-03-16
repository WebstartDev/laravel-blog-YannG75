<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('head.head')
    <title>{{$article->title}}</title>
</head>
<body>

@include('head.header')

<section class="container mb-3">
    <article class="w-100 articleBg">

    </article>
    <article class="bg-white p-3 shadow-sm">
        <h1>{{$article->title}}</h1>
        <small>{{$article->created_at->diffForHumans()}}</small>
        <p class="mt-4">{{$article->content}}</p>

        <h3 class="text-right"><em>by {{$article->user->name}}</em></h3>

    </article>
</section>

</body>
</html>
