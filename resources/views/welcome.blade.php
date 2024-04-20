{{-- @include('header', ['name' => 'hello world']) --}}


<h1>Home page</h1>

@php
    $fruits = [];
@endphp

@include('header', ['names' => $fruits])

@include('footer')
