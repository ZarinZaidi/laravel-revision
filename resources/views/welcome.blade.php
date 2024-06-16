<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        @include('header')
        <h1>Laravel Revision: Assignment</h1>
        <ul class="list-group">
            <li class="list-group-item">Make a 5 pages (HOME, CONTACT, ABOUT US, SERVICES AND ONE OF UR OWN CHOICE).
            </li>
            <li class="list-group-item">Do routing of every page and write a condition if any page is empty its shows
                the message of (No content
                found).</li>
            <li class="list-group-item">Use index or iteration to show the numbers in array data.</li>
            <li class="list-group-item">Use @ include to transfer data one page to another atleast 5 times.</li>
            <li class="list-group-item">Use @ yield and @ section to add the data into other pages</li>
            <li class="list-group-item">Give proper CSS to your content.</li>
        </ul>

        <article class="container">
            @hasSection('content')
                @yield('content')
            @else
                <h2>No content found</h2>
            @endif
        </article>
    </div>
</body>

</html>
