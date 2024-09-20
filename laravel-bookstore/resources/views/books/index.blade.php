<!DOCTYPE html>
<html>
<head>
    <title>Book List</title>
</head>
<body>
    <h1>Books</h1>
    <a href="{{ route('books.create') }}">Add New Book</a>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>ISBN</th>
                <th>Stock</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->isbn }}</td>
                    <td>{{ $book->stock }}</td>
                    <td>${{ number_format($book->price, 2) }}</td>
                    <td>
                        <a href="{{ route('books.show', $book) }}">View</a>
                        <a href="{{ route('books.edit', $book) }}">Edit</a>
                        <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
