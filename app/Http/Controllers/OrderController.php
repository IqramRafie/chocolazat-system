<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        // see in the get query if there contain a search parameter
        if (request()->has('search')) {
            // if the search only contain numbers, search by id
            if (is_numeric(request('search'))) {
                return view('orders.index', [
                    'orders' => Order::where('id', request('search'))->get(),
                ]);
            }

            return view('orders.index', [
                'orders' => Order::where('customer_name', 'like', '%' . request('search') . '%')->get(),
            ]);
        }
        return view('orders.index', [
            'orders' => Order::orderBy('id', 'desc')->get(),
        ]);
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $ordered_products = [
            [
                'product_id' => $request->product_id[0],
                'quantity' => $request->quantity[0],
            ]
        ];
        $order = Order::create([
            'creator_id' => auth()->id(),
            'customer_name' => $request->customer_name,
            'order_date' => $request->order_date,
            'ordered_products' => $ordered_products,
            'delivery_address' => $request->delivery_address,
        ]);

//        $data = $request->all();
//        return response()->json($data);

        return redirect()->route('orders');
    }

    public function show(Order $order)
    {
        return view('orders.show', [
            'order' => $order,
        ]);
    }

    public function edit(Order $order)
    {
        return view('orders.edit', [
            'order' => $order,
        ]);
    }
}
