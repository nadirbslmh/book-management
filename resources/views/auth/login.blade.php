<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Management</title>
</head>
<body>
    <h1>Login</h1>
    <p>Please login into your account</p>

    <form action="/auth/login" method="post">
        @csrf
        <input type="email" name="email" id="email" placeholder="enter your email" required>
        <input type="password" name="password" id="password" placeholder="enter your password" required>
        <button type="submit">Login</button>
    </form>

    <p>Don't have an account? <a href="/auth/register">register</a></p>
</body>
</html>