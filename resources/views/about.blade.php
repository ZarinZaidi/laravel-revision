@extends('welcome')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="mb-4">About Us</h2>
                <p class="lead">This is the about page.</p>
                @php
                    $array = ['php', 'laravel', 'javascript', 'vue'];
                @endphp

                <ul class="list-group">
                    @foreach ($array as $n)
                        @if ($loop->even)
                            <li class="list-group-item list-group-item-danger">{{ $n }}</li>
                        @elseif ($loop->odd)
                            <li class="list-group-item list-group-item-success">{{ $n }}</li>
                        @else
                            <li class="list-group-item">{{ $n }}</li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    @include('footer')
@endsection
