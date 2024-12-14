@vite(['resources/js/layouts/header.js'])
<div class="header-container">
    <div class="d-flex gap-4">
        <a href="{{ route('users') }}" class="btn">Users</a>
        <a href="{{ route('invoices') }}" class="btn">Invoices</a>
        <a href="{{ route('orders') }}" class="btn">Orders</a>
        <a href="{{ route('inventory') }}" class="btn">Inventory</a>
        <a href="{{ route('hr') }}" class="btn">HR</a>
    </div>

    <div class="flex gap-4">
        <a href="{{ route('dashboard') }}" class="btn">Chocolazat ERP</a>
        <a href="{{ route('logout') }}" class="btn">Logout</a>
    </div>
</div>
