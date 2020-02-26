
@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center"> 
    <h1>Welcome to Laravel</h1>
        {{-- The title will look something like This
        <h1>{{$title}}</h1> --}}
        <p>Not bad, not bad at all, still a lot to learn.... but not bad..</p>
        <p>Just need to know how to change the color schemes.</P>
        <p>
            @if(!Auth::user())
                <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> 
            
            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
            @endif
        </p>
    </div>
@endsection

