@extends('app')

@section('title')
    {{$post->title}}
@stop


@section('content')
    <article>
        <h2>{{ $post->title }}</h2>

        <div class="content">
            {{ $post->content }}
        </div>
        <a href="comments/{{$post->id}}">Comments</a><br/>
        <a href="{{$post->id}}/edit">update your post</a>
    </article>

@stop
