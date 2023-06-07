<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
</head>
<body>
    @if (session('success'))
    {{session('success')}}
        @endif

        <h1>Libri</h1>

    <ul>
        @foreach($books as $book)
            <li>
                <a href="{{route('books.show',['book' => $book['id']])}}">
                    {{$book['title']}} - {{$book['author']}} - {{ $book['pages'] }} - {{ $book['year'] }}
             </a>
            </li>
        @endforeach
    </ul>
    </body>
</html>