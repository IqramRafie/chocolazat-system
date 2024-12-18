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
        if (request()->has('search_field')) {
            // if the search only contain numbers, search by id
            if (is_numeric(request('search_field'))) {
                return view('orders.index', [
                    'orders' => Order::where('id', request('search_field'))->get(),
                ]);
            }

            return view('orders.index', [
                'orders' => Order::where('customer_name', 'like', '%' . request('search_field') . '%')->get(),
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


    public function destroy(Order $order)
    {
        $order = Order::where('id', $order->id)->firstorfail()->delete();

        return redirect()->route('orders');
    }

    public function update(Request $request, Order $order)
    {
        $order->customer_name = $request->customer_name;
        $order->order_date = $request->order_date;
        $order->delivery_address = $request->delivery_address;

        $new_ordered_products = [
            [
                'product_id' => $request->product_id[0],
                'quantity' => $request->quantity[0],
            ]
        ];

        $order->ordered_products = $new_ordered_products;

        $order->save();

        return redirect()->route('orders');
    }
}
