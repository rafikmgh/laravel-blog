@extends('app')

@section('title')
add a comment
@stop


@section('content')

    {!! Form::open(['url'=>"/posts/comments/$id"])!!}
    <div class="form-groupe">
        {!! Form::label('author','Pseudo:') !!}
        {!! Form::text('author' , null , ['class' =>'form-control']) !!}
    </div>

    <div class="form-groupe">
        {!! Form::label('comment','Your Comment:') !!}
        {!! Form::textarea('comment' , null , ['class' =>'form-control']) !!}
    </div>

    <div class="form-groupe">
        {!! Form::submit('Add comment' , null , ['class' =>'btn btn-primary form-control']) !!}
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
