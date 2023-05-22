<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <div id="app">
        <div class="login-container">
            <h1 class="title">Login Form</h1>
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" class="input-field">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="input-field">
                </div>
                <button type="submit" class="login-button">Login</button>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
