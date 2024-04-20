{{-- @include('header', ['name' => 'hello world']) --}}


<h1>Home page</h1>

@php
    $fruits = ['one' => 'apple', 'two' => 'mango', 'three' => 'banana'];
@endphp

@include('header', ['names' => $fruits])

@include('footer')
