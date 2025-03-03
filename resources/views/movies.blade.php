<!DOCTYPE html>
<html>
<head>
    <title>Movies</title>
</head>
<body>
    <h1>My movies list</h1>
    <ul>
        @foreach ($movies as $movie)
            <li><h1>{{ $movie->title }}</h1></li>
        @endforeach
    </ul>
</body>
</html>