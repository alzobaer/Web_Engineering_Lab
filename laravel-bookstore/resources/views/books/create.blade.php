<!DOCTYPE html>
<html>
<head>
    <title>Add New Book</title>
</head>
<body>
    <h1>Add New Book</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        <br>

        <label for="author">Author:</label>
        <input type="text" name="author" required>
        <br>

        <label for="isbn">ISBN:</label>
        <input type="text" name="isbn" required maxlength="13">
        <br>

        <label for="stock">Stock:</label>
        <input type="number" name="stock" value="0" min="0">
        <br>

        <label for="price">Price:</label>
        <input type="text" name="price">
        <br>

        <button type="submit">Add Book</button>
    </form>
</body>
</html>
