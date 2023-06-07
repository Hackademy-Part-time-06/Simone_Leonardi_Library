<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="antialiased">
    <h2>Dettagli</h2>
    <p>Nome:{{$book->name}}</p>
    <p>Autore:{{$book->author}}</p>
    <p>Pagine:{{$book->pages}}</p>
    <p>Anno:{{$book->year}}</p>
</body>
</html>