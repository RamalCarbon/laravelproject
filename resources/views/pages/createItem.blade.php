
@extends('layouts.app')

@section('content')
    <h1>Create Item</h1>
    {!! Form::open(['action' => 'PostsController@storeitem', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('scope', 'Scope')}}
            {{Form::text('scope','', ['class' => 'form-control', 'placeholder' => 'Scope'])}}
        </div>
        <div class="form-group">
            {{Form::label('fee', 'Fee')}}
            {{Form::text('fee','', ['class' => 'form-control', 'placeholder' => 'Fee'])}}
        </div>

        {{-- <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body','', ['class' => 'form-control', 'id' => 'summary-ckeditor', 'placeholder' => 'Body Text'])}}
        </div> --}}
        {{Form::Submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection