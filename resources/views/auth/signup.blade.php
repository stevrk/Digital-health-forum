<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Add your CSS files here -->
</head>
<body>
    <h1>Register</h1>

    <form method="POST" action="{{ route('admin-sign') }}">
        @csrf
        <div>
            <label for="username">Name</label>
            <input id="username" type="text" name="username" required autofocus>
        </div>
        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
        </div>
        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required>
        </div>
        <button type="submit">Register</button>
    </form>

    <!-- Add your JavaScript files here -->
</body>
</html>
