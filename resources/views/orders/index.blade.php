@extends('orders.layout')
 
@section('content')
<!DOCTYPE html>
<html lang = "en" dir="ltr" >
	<head>
    <meta charset="utf-8">
    <style type="text/css">
    .create1{
        margin-top: -72px;
    }
    .table{
        width:50%;
    }
    th{
        height:50px;
    }
    .orders{
        table-layout: auto; width: 100%;
        margin-top: -320px;
        margin-left: 650px;
    }
      
    </style>
    </head>
    <body>

    <div class="create1">
       <br><br><br> <a href="dashboard" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-3">Back</a>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        <div class="product">
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Product Category</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th width="100px">Action</th>
                </tr>

                @foreach($products as $product)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $product->prodcat }}</td>
                    <td>{{ $product->prodname }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->qty }}</td>
                    <td>     
                        <form action="{{ route('orders.destroy',$product->id) }}" method="POST">
                        
                            <a class="btn btn-info" href="{{ route('orders.create',$product->id) }}">Order</a>

                        </form>
                    </td>
                </tr>
           

                @endforeach
            </table>
        </div>

        <div class="orders">
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Order Category</th>
                    <th>Order Name</th>
                    <th>Price</th>
                    <th>Order</th>
                    <th>Total</th>
                    <th>Date</th>
                </tr>

                @foreach($orders as $order)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $order->ordercat }}</td>
                    <td>{{ $order->orderprod }}</td>
                    <td>{{ $order->price }}</td>
                    <td>{{ $order->order }}</td>
                    <td>{{ $order->total }}</td>
                    <td>{{ $order->date }}</td>
                </tr>
           

                @endforeach
            </table>
        </div>
        
        </body>
        </html>
@endsection