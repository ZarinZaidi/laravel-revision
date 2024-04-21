<!DOCTYPE html>
<html lang="en">

@include('header')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignment</title>
</head>

<body>
    <h1>Laravel Revision: Assignment</h1>
    <ul>
        <li>Make a 5 pages (HOME, CONTACT, ABOUT US, SERVICES AND ONE OF UR OWN CHOICE).</li>
        <li>Do routing of every page and write a condition if any page is empty its shows the message of (No content
            found).</li>
        <li>Use index or iteration to show the numbers in array data.</li>
        <li>Use @ include to transfer data one page to another atleast 5 times.</li>
        <li>Use @ yield and @ section to add the data into other pages</li>
        <li>Give proper CSS to your content.</li>
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
