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
                <strong>{{$comment->author}}</strong>:"{{$comment->comment}}" at {{$comment->commented_at}} <a
                    href="/posts/comments/{{$id}}/{{$comment->id}}/addupdate">update</a> <a href="/posts/comments/{{$id}}/{{$comment->id}}/delete">supprimer</a>
            </div>
        @endforeach

    </div>
    <a href="{{$id}}/add">add a comment</a>

@stop
