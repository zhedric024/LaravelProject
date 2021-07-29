<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function index()
    {
       $products = Product::all();

       return view('products.index',compact('products'))
       ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    public function create()
    {
        $categories = Category::all(['id','catname']);
        return view('products.create',compact('categories'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    public function store()
    {
        request()->validate([
            'prodcat' => 'required',
            'prodname' => 'required',
            'qty' => 'required',
        ]);

        Product::create([
            'prodcat' => request('prodcat'),
            'prodname' => request('prodname'),
            'qty' => request('qty'),
        ]);

        return redirect('/products')
                        ->with('success','Product created successfully.');
    }

    public function update(Product $product)
    {
        request()->validate([
            'prodcat' => 'required',
            'prodname' => 'required',
            'qty' => 'required',
        ]);

        $product->update([
            'prodcat' => request('prodcat'),
            'prodname' => request('prodname'),
            'qty' => request('qty'),
        ]);

        return redirect('/products')
        ->with('success','Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/products')
        ->with('success','Product deleted successfully');
    } 
}
