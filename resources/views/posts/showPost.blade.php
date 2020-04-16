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
    </article>

@stop
