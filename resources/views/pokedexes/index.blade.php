<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokedexes</title>
</head>
<body>
    <h1>Pokedexes</h1>

    <ul>
        @foreach ($pokedexes as $pokedex)
            <li>{{ $pokedex->name }}</li>
        @endforeach
    </ul>
</body>
</html>