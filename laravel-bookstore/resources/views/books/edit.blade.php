<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
</head>
<body>
    <h1>Edit Book</h1>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $book->title }}" required>
        <br>

        <label for="author">Author:</label>
        <input type="text" name="author" value="{{ $book->author }}" required>
        <br>

        <label for="isbn">ISBN:</label>
        <input type="text" name="isbn" value="{{ $book->isbn }}" required maxlength="13">
        <br>

        <label for="stock">Stock:</label>
        <input type="number" name="stock" value="{{ $book->stock }}" min="0">
        <br>

        <label for="price">Price:</label>
        <input type="text" name="price" value="{{ $book->price }}">
        <br>

        <button type="submit">Update Book</button>
    </form>
</body>
</html>
