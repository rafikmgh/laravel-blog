@extends('app')
@section('title')
    posts
@stop

@section('content')
<h1>Blog</h1>
  @foreach($posts as $post)
   <article>
       <a href="posts/{{$post->id}}"><h2>{{ $post->title }}</h2></a>
       <div class="content">
           {{$post->content}}
       </div>
       <a href="post/comments/{{$post->id}}">Comments</a>
   </article>
  @endforeach

<a href="/posts/create"><h3>Create a post</h3></a>
@stop
