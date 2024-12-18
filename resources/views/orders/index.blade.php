@extends('orders.layout')

{{--@section('module-section-title-2')--}}
{{--    Index--}}
{{--@endsection--}}

@section('module-content-2')
    <h4 class="module-title mb-4 fs-5">Create Order</h4>

    <form class="d-flex mb-4 align-items-baseline gap" method="get" action="{{ route('orders') }}">
        <label for="search_field" class="form-label me-5">Search:</label>
        <input type="text" id="search_field" class="form-control w-auto me-2" name="search_field">
        <button class="btn btn-primary" type="submit">Search</button>
    </form>

    <table class="table-naz">
        <tr>
            <th>Order ID</th>
            <th>Customer</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->customer_name }}</td>
                <td>{{ $order->order_date }}</td>
                <td>
                    <div class="d-flex gap-3">
                        <a href="{{ route('orders.show', $order) }}" class="btn btn-outline-secondary">View</a>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
