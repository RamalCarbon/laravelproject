
@extends('layouts.app')

@section('content')
    <h1>Create Invoice</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('client_name', 'Client Name')}}
            {{Form::text('client_name','', ['class' => 'form-control', 'placeholder' => 'Client Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('client_address', 'Client Address')}}
            {{Form::text('client_address','', ['class' => 'form-control', 'placeholder' => 'Client Address'])}}
        </div>
        <div class="form-group">
            {{Form::label('item_no', 'Item Number')}}
            {{Form::text('item_no','', ['class' => 'form-control', 'placeholder' => 'Item Number'])}}
        </div>
        <div class="form-group">
            {{Form::label('access_code', 'Access Code')}}
            {{Form::text('access_code','', ['class' => 'form-control', 'placeholder' => 'Access Codes'])}}
        </div>
        <div class="form-group">
            {{Form::label('date_created', 'Date Created')}}
            {{Form::text('date_created','', ['class' => 'form-control', 'placeholder' => 'yyyy-mm-dd'])}}
        </div>
        <div class="form-group">
            {{Form::label('notes', 'Notes')}}
            {{Form::textarea('notes','', ['class' => 'form-control', 'id' => 'summary-ckeditor', 'placeholder' => 'Write Notes Here'])}}
        </div>
        {{-- <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body','', ['class' => 'form-control', 'id' => 'summary-ckeditor', 'placeholder' => 'Body Text'])}}
        </div> --}}
        {{Form::Submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection