<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
       $categories = Category::all();

       return view('categories.index',compact('categories'))
       ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store()
    {
        request()->validate([
            'catname' => 'required',
            'description' => 'required',
        ]);

        Category::create([
            'catname' => request('catname'),
            'description' => request('description'),
        ]);

        return redirect('/categories')
                        ->with('success','Category created successfully.');
    }

    public function show(Category $category)
    {
        return view('categories.show',compact('category'));
    }

    public function edit(Category $category)
    {
        return view('categories.edit', ['category' => $category]);

    }

    public function update(Category $category)
    {
        request()->validate([
            'catname' => 'required',
            'description' => 'required',
        ]);

        $category->update([
            'catname' => request('catname'),
            'description' => request('description'),
        ]);

        return redirect('/categories')
        ->with('success','Category updated successfully');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect('/categories')
        ->with('success','Category deleted successfully');
    } 
    
}
