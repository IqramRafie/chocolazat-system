@extends('orders.layout')

@section('module-section-title-2')
    View Order
@endsection

@section('module-content-2')
    <h4 class="module-title mb-4 fs-5">Order {{ $order->id }}</h4>
    <div class="form-naz">
        <div class="input-pack mb-4">
            <label for="customer_name" class="form-label">Customer Name:</label>
            <input type="text" name="customer_name" class="form-control-plaintext" required
                   id="customer_name" readonly value="{{ $order->customer_name }}">
        </div>

        <div class="input-pack mb-4">
            <label for="order_date" class="form-label">Order Date:</label>
            <input type="date" name="order_date" class="form-control-plaintext" readonly
                   required id="order_date" value="{{ $order->order_date }}">
        </div>

        <div class="input-pack mb-4">
            <label for="delivery_address" class="form-label">Delivery Address:</label>
            <textarea name="delivery_address" class="form-control-plaintext" readonly
                      required id="delivery_address">{{ e($order->delivery_address) }}</textarea>
        </div>

        <div class="fs-4 form-section mb-4">Items</div>
        <table class="table-naz mb-4">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
            </tr>
            <tr>
                <td>
                    {{ ucwords($order->ordered_products[0]['product_id']) }}
                </td>
                <td>
                    {{ $order->ordered_products[0]['quantity'] }}
                </td>
            </tr>
{{--            <tr>--}}
{{--                <td colspan="2">--}}
{{--                    <div href="#" id="add_product" class="btn-link cursor-pointer">Add new item...</div>--}}
{{--                </td>--}}
{{--            </tr>--}}
        </table>

        <div class="d-flex gap-4">
            <a href="{{ route('orders.edit', ['order' => $order]) }}" class="btn btn-secondary">Edit</a>
            <div>
                <form action="{{ route('orders.destroy', $order) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Are you sure?')"
                       class="btn btn-outline-danger">Delete</button>
                </form>
            </div>

        </div>

    </div>
@endsection
