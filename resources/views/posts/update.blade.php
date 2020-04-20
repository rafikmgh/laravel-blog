@extends('app')

    @section('title')
        update your post
    @endsection


    @section('content')
        {!! Form::open(['url'=>"posts/$id"])!!}
        <h1>Update your Post</h1>
        <a href="/posts">Return to posts page</a>
        <div class="form-group">
            {!! Form::label('newtitle','New Title:') !!}
            {!! Form::text('newtitle' , null , ['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('newcontent','New Content:') !!}
            {!! Form::textarea('newcontent' , null , ['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Update Post' , null , ['class' =>'btn btn-primary form-control']) !!}
        </div>


        {!! Form::close()!!}

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif



    @endsection

