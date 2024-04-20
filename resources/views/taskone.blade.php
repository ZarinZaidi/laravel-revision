<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 1</title>
</head>

<body>
    <h1>Laravel Recap: Task 1</h1>
    <ul>
        <li> Take a variable and store the array data inside it.</li>
        <li> Show that data in a list with the help of loop.</li>
        <li> Change the color of the list data as per even or odd.</li>
        <li> Also print the list in console. (Complete later as we have not learnt it yet)</li>
        <li> Make 3 pages and do routing by providing them a name</li>
    </ul>
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

    <a href="{{ route('secondpage') }}">Second page</a>
    <br>
    <a href="{{ route('thirdpage') }}">Third page</a>
</body>

</html>
