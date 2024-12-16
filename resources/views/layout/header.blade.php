@vite(['resources/js/layouts/header.js'])
<div class="header-container">
    <div class="d-flex gap-4">
        <a href="{{ route('users') }}" class="btn fs-5">Users</a>
        <a href="{{ route('invoices') }}" class="btn fs-5">Invoices</a>
        <a href="{{ route('orders') }}" class="btn fs-5">Orders</a>
        <a href="{{ route('inventory') }}" class="btn fs-5">Inventory</a>
        <a href="{{ route('hr') }}" class="btn fs-5">HR</a>
    </div>

    <div class="flex gap-4">
        <a href="{{ route('dashboard') }}" class="btn fs-5 brand">Chocolazat ERP</a>
        <a href="{{ route('logout') }}" class="btn">Logout</a>
    </div>
</div>
