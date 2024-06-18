<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <div class="header">
        <div class="logo">Logo</div>
        <div class="signup-link">
            Don't have an account? <a href="/signup">Sign Up</a>
        </div>
    </div>
    <div class="login-form">
        <h2>Log In</h2>
        <form action="/login" method="post">
            @csrf
            <div class="input-group">
                <label for="email">Email*</label>
                <input type="email" id="email" name="email" class="@error('email') is-invalid @enderror" required>
            </div>
            @error('email')
            <div class="error-message">
                {{ $message }}
            </div>
            @enderror
            <div class="input-group">
                <label for="password">Password*</label>
                <input type="password" id="password" name="password" class="@error('password') is-invalid @enderror" required>
            </div>
            @error('password')
            <div class="error-message">
                {{ $message }}
            </div>
            @enderror
            <button type="submit" class="login-button">Log In</button>
            <button type="button" class="google-login-button"> 
                <img src="/images/google.png" alt="Google logo"> Log In with Google
            </button>
            <div class="forgot-password">
                <a href="#">Forgot your password?</a>
            </div>
        </form>
    </div>
</body>
</html>