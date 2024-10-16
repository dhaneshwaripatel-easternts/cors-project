<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Link to your CSS file -->
</head>
<body>
    <div class="container">
        <h2>Login</h2>

        @if ($errors->any()) <!-- Check if there are any error messages -->
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error) <!-- Loop through each error -->
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('/api/login') }}" method="POST"> <!-- Change the action to the API route -->
            @csrf <!-- CSRF token for security -->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
