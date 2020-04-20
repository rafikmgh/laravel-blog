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
       <a href="posts/comments/{{$post->id}}">Comments</a></br>
       <a href={{route('posts.delete',$post->id)}}>delete your poste ?</a>
   </article>
  @endforeach

<a href={{route('posts.create')}}><h3>Create a post</h3></a>
@stop
