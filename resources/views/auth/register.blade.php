<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Management</title>
</head>
<body>
    <h1>Register</h1>
    <p>Please create a new account</p>

    <form action="/auth/register" method="post">
        @csrf
        <input type="text" name="name" id="name" placeholder="enter your name" required>
        <input type="email" name="email" id="email" placeholder="enter your email" required>
        <input type="password" name="password" id="password" placeholder="enter your password" required>
        <button type="submit">Register</button>
    </form>

    <p>Already have an account? <a href="/auth/login">login</a></p>
</body>
</html>