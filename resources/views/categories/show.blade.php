@extends('categories.layout')
@section('content')
            <div class="pull-right">
                <br><a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>
            </div>
   
    <div class="mb-4">
                <label class="font-bold text-gray-800" for="catname">Category Name:</label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="catname" name="catname" value="{{ $category->catname }}">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="description">Description: </label>
                <input class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="description" name="description" value="{{ $category->description }}">
            </div>

     </div>
@endsection