<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
       $products = Product::all();
       $orders = Order::all();
       return view('orders.index',compact('products','orders'))
       ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(Product $product)
    {
        return view('orders.create', ['product' => $product]);

    }

    public function store()
    {
        request()->validate([
            'ordercat' => 'required',
            'orderprod' => 'required',
            'price' => 'required',
            'order' => 'required',
            'total' => 'required',
            'date' => 'required',
        ]);

        Order::create([
            'ordercat' => request('ordercat'),
            'orderprod' => request('orderprod'),
            'price' => request('price'),
            'order' => request('order'),
            'total' => request('total'),
            'date' => request('date'),
        ]);

        return redirect('/orders')
                        ->with('success','Order created successfully.');
    }

    public function show(Order $order)
    {
        return view('orders.show',compact('order'));
    }

    public function edit(Order $order)
    {
        return view('orders.edit', ['order' => $order]);

    }

    public function update(Order $order)
    {
        request()->validate([
            'ordercat' => 'required',
            'orderprod' => 'required',
            'price' => 'required',
            'order' => 'required',
            'total' => 'required',
            'date' => 'required',
        ]);

        $order->update([
            'ordercat' => request('ordercat'),
            'orderprod' => request('orderprod'),
            'price' => request('price'),
            'order' => request('order'),
            'total' => request('total'),
            'date' => request('date'),
        ]);

        return redirect('/orders')
        ->with('success','Order updated successfully');
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return redirect('/orders')
        ->with('success','Order deleted successfully');
    } 
}
