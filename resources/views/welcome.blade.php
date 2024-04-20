<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Home page</h1>
    <a href="{{ route('mypost') }}">post page using name</a>
    <br>
    <a href="/post">post page using url</a>
    <br>

    {{-- we use double curly braces template because it is safe from hacking. cannot pass anything extra into the curly braces --}}
    {{ 5 + 2 }}
    <br>
    {{ '<h1>hello world</h1>' }}
    <br>
    {!! '<h1>hello world</h1>' !!}
    {!! '<script>alert("hello")</script>' !!}

    @php
        $user = 'Tom & Jerry';
        $name = ['sam', 'firdaus', 'don'];
    @endphp

    <p>{{ $user }}</p>
    {{-- anytime we want to access all the arrays values, we need loop --}}
    <ul>
        @foreach ($name as $n)
            <li>{{ $n }}</li>
        @endforeach
    </ul>
    <ul>
        @foreach ($name as $n)
            <li>{{ $loop->iteration }} - {{ $n }}</li>
        @endforeach
    </ul>
    @foreach ($name as $n)
        {{-- laravel template don't need curly braces around if statement --}}
        @if ($loop->first)
            <li style="color:red">{{ $n }}</li>
        @elseif ($loop->last)
            <li style="color:green">{{ $n }}</li>
        @else
            <li>{{ $n }}</li>
        @endif
    @endforeach
</body>

</html>
