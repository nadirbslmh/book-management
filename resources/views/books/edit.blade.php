<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Management</title>
</head>
<body>
    <form action="/books/{{ $book->id }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="title" id="title" placeholder="enter book title" value="{{ $book->title }}" required>
        <input type="text" name="publisher" id="publisher" placeholder="enter book publisher" value="{{ $book->publisher }}" required>
        <textarea name="description" id="description" cols="30" rows="10" placeholder="enter book description">{{ $book->description }}</textarea>
        <button type="submit">Edit Book</button>
    </form>
</body>
</html>