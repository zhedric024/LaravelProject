@extends('products.layout')
  
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
<form method="POST" action="/products">
            @csrf



            <div class="mb-4">
                <label class="font-bold text-gray-800" for="description">Product Category: </label>
                <select class="form-control h-10 bg-white border-gray-300 rounded px-3 mr-4 full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="prodcat" name="prodcat">
                @foreach($categories as $category)
                    <option value="{{$category->catname}}">{{$category->catname}}</option>
                @endforeach
                </select>            
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="description">Product Name: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="prodname" name="prodname">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="catname">Price: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="price" name="price">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="description">Quantity: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="qty" name="qty">
            </div>

            <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Create</button>
            <a href="/products" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>
        </form>
</form>
@endsection     

 