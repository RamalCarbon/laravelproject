
@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <span><h3>All Invoices <a href="/posts/create" class="btn btn-primary">Add New</a></h3></span>
            <table class="table table-bordered">
                <tr>
                    <th>Invoice #</th>
                    <th>Client name</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
                @foreach($info as $data)
                <tr>
                    <td>{{$data->invoice_no}}</td>
                    <td>{{$data->client_name}}</td>
                    <td>${{$data->fee}}</td>
                    <td><a href="3" class="btn btn-primary">Edit</a>{{Form::submit('Delete', ['class'=> 'btn btn-danger'])}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection