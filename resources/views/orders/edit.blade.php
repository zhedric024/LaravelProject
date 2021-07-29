@extends('orders.layout')
   
@section('content')
 
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check input field code<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('orders.update',$order->id) }}" method="POST">
        @csrf
        @method('PUT')


            <div class="mb-4">
                <label class="font-bold text-gray-800" for="description">Quantity Order: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="orderprod" name="orderprod" value="{{ $order->orderprod }}">
            </div>
        
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="description">Quantity Order: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="quantity" name="quantity" value="{{ $order->quantity }}">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="catname">Customer Name: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="ordername" name="ordername" value="{{ $order->ordername }}">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="description">Date: </label><br>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" type="date" id="date" name="date" value="{{ $order->date }}">
           </div>

            <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Update</button>
            <a href="/orders" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>
        </div>
   
    </form>
@endsection

     