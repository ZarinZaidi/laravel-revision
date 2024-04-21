@extends('welcome')

@section('content')
    <h1>About Blade</h1>
    @php
        $array = ['php', 'laravel', 'javascript', 'vue'];
    @endphp

    @foreach ($array as $n)
        @if ($loop->even)
            <li style="color:red">{{ $n }}</li>
        @elseif ($loop->odd)
            <li style="color:green">{{ $n }}</li>
        @else
            <li>{{ $n }}</li>
        @endif
    @endforeach
    <br>
    @include('footer')
@endsection
