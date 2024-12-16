@extends('layout.main')

@section('title')
    @yield('module-title') @hasSection('module-section-title') - @yield('module-section-title')@endif
@endsection

@section('content')
    <div class="w-100 d-flex flex-row gap-5 align-items-start">
        @vite(['resources/js/modules/nav.js'])
        @yield('module-nav')
        <div class="flex-grow-1">
            @yield('module-content')
        </div>
    </div>
@endsection
