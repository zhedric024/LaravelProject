@extends('categories.layout')
 
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
      
    </style>
    </head>
    <body>

    <div class="create1">
        <a href="/categories/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-3">Add category</a>
    </div>

    <div class="create2">
        <a href="home" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-3">Back</a>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Category Name</th>
            <th>Description</th>
            <th width="250px">Action</th>
        </tr>

        @foreach($categories as $category)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $category->catname }}</td> 
            <td>{{ $category->description }}</td>
            <td>      
                    <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
    
                        <a class="btn btn-info" href="{{ route('categories.show',$category->id) }}">Show</a>
        
                        <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}">Edit</a>
    
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
             </td>
        </tr>
        </body>
    </html>
        @endforeach
    </table>
    
@endsection