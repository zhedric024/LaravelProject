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
       $orders = Order::all();
       return view('orders.index',compact('orders'))
       ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $products = Product::all(['id','prodname']);
        return view('orders.create',compact('products'));
    }

    public function edit(Order $order)
    {
        return view('orders.edit', ['order' => $order]);
    }

    public function store()
    {
        request()->validate([
            'orderprod' => 'required',
            'quantity' => 'required',
            'ordername' => 'required',
            'date' => 'required',
        ]);

        Order::create([
            'orderprod' => request('orderprod'),
            'quantity' => request('quantity'),
            'ordername' => request('ordername'),
            'date' => request('date'),
        ]);

        return redirect('/orders')
                        ->with('success','Order created successfully.');
    }

    public function update(Order $order)
    {
        request()->validate([
            'orderprod' => 'required',
            'quantity' => 'required',
            'ordername' => 'required',
            'date' => 'required',
        ]);

        $order->update([
            'orderprod' => request('orderprod'),
            'quantity' => request('quantity'),
            'ordername' => request('ordername'),
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
