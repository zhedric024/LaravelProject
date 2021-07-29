@extends('products.layout')
@section('content')
            <div class="pull-right">
                <br><a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
   
            <div class="mb-4">
                <br><label class="font-bold text-gray-800" for="prodname">Product Category:</label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="prodcat" name="prodcat" value="{{ $product->prodcat }}">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="prodname">Product Name:</label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="prodname" name="prodname" value="{{ $product->prodname }}">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="description">Quantity: </label>
                <input class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="qty" name="qty" value="{{ $product->qty }}">
            </div>
    
@endsection