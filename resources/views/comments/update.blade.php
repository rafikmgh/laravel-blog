@extends('app')

@section('title')
    update your comment
@stop


@section('content')
    <a href="/posts/comments/{{$id}}">return to poste page</a>
    {!! Form::open(['url'=>"/posts/comments/$id/$commentid"]) !!}

    <div class="form-group">
        {!! Form::label('newcomment','Your New Comment:') !!}
        {!! Form::textarea('newcomment' , null , ['class' =>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('update comment' , null , ['class' =>'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif


@stop
