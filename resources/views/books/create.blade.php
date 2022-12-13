<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Management</title>
</head>
<body>
    <form action="/books/store" method="post">
        @csrf
        <input type="text" name="title" id="title" placeholder="enter book title" required>
        <input type="text" name="publisher" id="publisher" placeholder="enter book publisher" required>
        <textarea name="description" id="description" cols="30" rows="10" placeholder="enter book description"></textarea>
        <button type="submit">Add Book</button>
    </form>
</body>
</html>