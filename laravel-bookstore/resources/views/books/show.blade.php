<!DOCTYPE html>
<html>
<head>
    <title>{{ $book->title }}</title>
</head>
<body>
    <h1>{{ $book->title }}</h1>
    <p>Author: {{ $book->author }}</p>
    <p>ISBN: {{ $book->isbn }}</p>
    <p>Stock: {{ $book->stock }}</p>
    <p>Price: ${{ number_format($book->price, 2) }}</p>
    <a href="{{ route('books.index') }}">Back to List</a>
</body>
</html>
