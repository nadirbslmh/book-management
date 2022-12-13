<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Management</title>
</head>
<body>
    <h1>All Books</h1>

    @foreach ($books as $book)
        <h3>{{ $book->title }}</h3>
        <p>{{ $book->publisher }}</p>
        <a href="/books/{{ $book->id }}">View book</a>
    @endforeach

</body>
</html>