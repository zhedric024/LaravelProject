@extends('orders.layout')
 
@section('content')
<!DOCTYPE html>
<html lang = "en" dir="ltr" >
	<head>
        <meta charset="utf-8">
    <style type="text/css">
    .create1{
        margin-left: 1100px;
    }

    .create2{
        margin-top: -72px;
    }
    .table{
        table-layout: auto; width: 100%;
    }

    </style>
    </head>
    <body>
         
            <div class="create1">
                <a href="/orders/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-3">Add Order</a>
            </div>

            <div class="create2">
                <a href="home" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-3">Back</a>
            </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<div class="table">
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Product Name</th>
            <th>Quantity Order</th>
            <th>Customer Name</th>
            <th>Date Order</th>
            <th width="300px">Action</th>
        </tr>

        @foreach($orders as $order)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $order->orderprod }}</td>
            <td>{{ $order->quantity }}</td>
            <td>{{ $order->ordername }}</td>
            <td>{{ $order->date }}</td>
            <td>      
                    <form action="{{ route('orders.destroy',$order->id) }}" method="POST">

        
                        <a class="btn btn-primary" href="{{ route('orders.edit',$order->id) }}">Edit</a>
    
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
             </td>
        </tr>
        @endforeach
    </table>
</div>

   </body>
    </html>
@endsection