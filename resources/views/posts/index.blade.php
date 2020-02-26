
@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>All Invoices</h3>
            <table class="table table-bordered">
                <tr>
                    <th>Invoice #</th>
                    <th>Client name</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
                @foreach($info as $data)
                <tr>
                    <td>{{$data['invoice_no']}}</td>
                    <td>{{$data['client_name']}}</td>
                    <td>{{$data['fee']}}</td>
                    <td></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection