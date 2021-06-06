@extends('orders.layout')
  
@section('content')

@if ($errors->any())
            <div class="alert alert-danger">
                <strong>Warning!</strong> Please check your input code<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
@endif
<form method="POST" action="/orders">
            @csrf
            
            <div class="mb-4">
                <br><label class="font-bold text-gray-800" for="catname">Order Category: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="ordercat" name="ordercat" value="{{ $product->prodcat }}">
            </div>
           
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="description">Order Name: </label>
                <input class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="orderprod" name="orderprod">
            </div>

            <div class="mb-4">
                <br><label class="font-bold text-gray-800" for="catname">Price: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="price" name="price" >
            </div>
            

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="description">Order: </label>
                <input class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="order" name="order">
            </div>

            <div class="mb-4">
                <br><label class="font-bold text-gray-800" for="catname">Total: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="total" name="total">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="description">Date: </label>
                <input type="date" id="date" name="date">
            </div>

            <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Create</button>
            <a href="/orders" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>
            
</form>
@endsection     

 