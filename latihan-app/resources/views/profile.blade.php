<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h1>Profile Page</h1>
    <p>Welcome to your profile mabro!</p>
    <a href="/blog">Go to Blog</a><br><br>
    <form action="/logout" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
