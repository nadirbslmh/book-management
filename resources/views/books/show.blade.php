<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Management</title>
</head>
<body>
    <h1>Book Details</h1>

    <p>Title: {{ $book->title }}</p>
    <p>Publisher: {{ $book->publisher }}</p>
    <p>Description: {{ $book->description }}</p>

    <a href="/books/{{ $book->id }}/edit">Edit book</a>

    <form action="/books/{{ $book->id }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete book</button>
    </form>

</body>
</html>