@extends('template-blog')
@section('title')
    Simple Blog
@stop

@section('content')
    @foreach($articles as $article)
        <div class="jumbotron" xmlns="http://www.w3.org/1999/html">
            <h1>{{ $article['title'] }}</h1>
            <p class="lead">{{ $article['summary'] }}</p>
            by {{ $article['author'] }}
            <p>
                <textarea></textarea>
            </p>
            <p><a class="btn btn-lg btn-success" href="#" role="button">Comentar</a></p>
        </div>

    @endforeach
@stop