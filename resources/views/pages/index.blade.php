
@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center"> 
    <h1>Welcome to NaigeoAppl</h1>
        {{-- The title will look something like This
        <h1>{{$title}}</h1> --}}
        <p>Never paid much attention to the front end because the back end logic ad been giving me issues.</p>
        <p>To avoid everything breaking when i was going to send what i had done i just left the code as is.</P>
        <p>I'm more of a front end person</p>
        <p>
            @if(!Auth::user())
                <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> 
            
            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
            @endif
        </p>
    </div>
@endsection

