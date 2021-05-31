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
            
        </body>
        </html>
@endsection