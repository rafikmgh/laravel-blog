@extends('app')
@section('title')
    post
@stop

@section('content')
    <article>
        <h1>{{$post->title}}</h1>
        <div class="content">
            {{$post->content}}
        </div>
    </article>
    <div class="comments">

        @foreach($comments as $comment)
            <div class="comment">
                <strong>{{$comment->author}}</strong>:"{{$comment->comment}}" at {{$comment->commented_at}}
            </div>
        @endforeach

    </div>

@stop
