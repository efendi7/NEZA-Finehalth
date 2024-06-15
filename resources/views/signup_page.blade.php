<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>

    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <div class="header">
        <div class="logo">Logo</div>
        <div class="signup-link">
            Already have an account? <a href="/login">Log in</a>
        </div>
    </div>
    <div class="login-form">
        <h2>Sign up</h2>
        <form>
            <div class="input-group">
                <label for="name">Username*</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input-group">
                <label for="email">Email*</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password*</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-button">Sign up</button>
            <button type="button" class="google-login-button"> 
                <img src="/images/google.png" alt="Google logo"> Sign up with Google
            </button>
        </form>
    </div>
</body>
</html>
