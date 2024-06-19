<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Numbers</title>
</head>
<body>
    <form action="/find-primes" method="POST">
        @csrf
        <label for="start">Start:</label>
        <input type="number" id="start" name="start" required>
        <label for="end">End:</label>
        <input type="number" id="end" name="end" required>
        <button type="submit">Find Primes</button>
    </form>
</body>
</html>