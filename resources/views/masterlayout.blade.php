<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>My website</h1>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/post">Post</a></li>
    </ul>

    <article>
        @hasSection('content')
            @yield('content')
        @else
            <h2>No content found</h2>
        @endif
    </article>
</body>

</html>
