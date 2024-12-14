@vite(['resources/js/layouts/header.js'])
<div class="header-container">
    <div class="d-flex gap-">
        <a href="{{ route('dashboard') }}" class="btn">Users</a>
        <a href="{{ route('dashboard') }}" class="btn">Invoices</a>
        <a href="{{ route('dashboard') }}" class="btn">Orders</a>
        <a href="{{ route('dashboard') }}" class="btn">Inventory</a>
        <a href="{{ route('dashboard') }}" class="btn">HR</a>
    </div>

    <div class="flex gap-4">
        <a href="{{ route('dashboard') }}" class="btn">Chocolazat ERP</a>
        <a href="{{ route('logout') }}" class="btn">Logout</a>
    </div>
</div>
