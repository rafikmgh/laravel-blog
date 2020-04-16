@extends('app')

@section('title')

    create post

@stop


@section('content')

  <h1>Write a New Post</h1>
  <a href="/posts">Return to posts page</a>
 {!! Form::open(['url'=>'posts'])!!}
   <div class="form-groupe">
   {!! Form::label('title','Title:') !!}
   {!! Form::text('title' , null , ['class' =>'form-control']) !!}
   </div>

  <div class="form-groupe">
      {!! Form::label('content','Content:') !!}
      {!! Form::textarea('content' , null , ['class' =>'form-control']) !!}
  </div>

  <div class="form-groupe">
      {!! Form::submit('Add Post' , null , ['class' =>'btn btn-primary form-control']) !!}
  </div>


  {!! Form::close()!!}

    @if ($errors->any())
     <ul class="alert alert-danger">
         @foreach($errors->all() as $error)
             <li>{{$error}}</li>
         @endforeach

     </ul>
    @endif
@stop
