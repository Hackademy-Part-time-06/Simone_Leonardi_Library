<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
</head>
<body>
    <ul>
        @foreach($books as $book)
            <li>
                {{$book['title']}} - {{$book['author']}} - {{$book['year']}} - {{$book['pages']}}
            </li>
        @endforeach
    </ul>
    </body>
</html>