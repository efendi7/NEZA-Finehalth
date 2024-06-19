<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Numbers Results</title>
</head>
<body>
    <h1>Prime Numbers between {{ $start }} and {{ $end }}</h1>
    @if(count($primes) > 0)
        <ul>
            @foreach ($primes as $prime)
                <li>{{ $prime }}</li>
            @endforeach
        </ul>
    @else
        <p>No prime numbers found in this range.</p>
    @endif
</body>
</html>