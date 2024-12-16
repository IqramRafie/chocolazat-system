@extends('layout.module')

@section('module-title')
    Order
@endsection

@section('module-section-title')
    @hasSection('module-section-title-2')@yield('module-section-title-2')@endif
@endsection

@section('module-nav')
    @include('orders.nav')
@endsection

@section('module-content')
    @yield('module-content-2')
@endsection
