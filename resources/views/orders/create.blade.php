@extends('orders.layout')

@section('module-section-title-2')
    Create Order
@endsection

@section('module-content-2')
    <h4 class="module-title mb-4 fs-5">Create Order</h4>
    <form action="{{ route('orders.store') }}" method="post" class="form-naz">
        @csrf

        <div class="input-pack mb-4">
            <label for="customer_name" class="form-label">Customer Name:</label>
            <input type="text" name="customer_name" class="form-control" required id="customer_name">
        </div>

        <div class="input-pack mb-4">
            <label for="order_date" class="form-label">Order Date:</label>
            <input type="date" name="order_date" class="form-control"
                   required id="order_date" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
        </div>

        <div class="input-pack mb-4">
            <label for="delivery_address" class="form-label">Delivery Address:</label>
            <textarea name="delivery_address" class="form-control"
                      required id="delivery_address"></textarea>
        </div>

        <div class="fs-4 form-section mb-4">Items</div>
        <table class="table-naz mb-4">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
            </tr>
            <tr>
                <td>
                    <select name="product_id[]" class="form-control" required>
                        <option value="" selected disabled>Select Product</option>
                        <option value="biskut">Biskut</option>
{{--                        @foreach($products as $product)--}}
{{--                            <option value="{{ $product->id }}">{{ $product->name }}</option>--}}
{{--                        @endforeach--}}
                    </select>
                </td>
                <td>
                    <input type="number" name="quantity[]" class="form-control w-auto" required value="1" min="0">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div href="#" id="add_product" class="btn-link cursor-pointer">Add new item...</div>
                </td>
            </tr>
        </table>

        <div class="d-flex gap-4">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="reset" class="btn btn-outline-secondary">Reset</button>
        </div>

    </form>
@endsection
