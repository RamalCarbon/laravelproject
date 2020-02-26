@extends('layouts.app')

@section('content')
<a class="btn btn-secondary btn-sm" href="/posts" role="button">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div class="jumbotron">
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} </small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id==$post->user_id)
             <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
            {!!Form::open(['action'=> ['PostsController@destroy', $post->id], 'method'=> 'POST', 'class'=> 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class'=> 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection