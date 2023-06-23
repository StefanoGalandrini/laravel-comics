<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Comics</title>
    @vite('resources/js/app.js')

</head>

<body>
    @include('components.header', [
        'menuItems' => [
            ['item' => 'characters', 'isActive' => false],
            ['item' => 'comics', 'isActive' => false],
            ['item' => 'movies', 'isActive' => false],
            ['item' => 'tv', 'isActive' => false],
            ['item' => 'games', 'isActive' => false],
            ['item' => 'collectibles', 'isActive' => false],
            ['item' => 'videos', 'isActive' => false],
            ['item' => 'fans', 'isActive' => false],
            ['item' => 'news', 'isActive' => false],
            ['item' => 'shop', 'isActive' => false],
        ],
    ])

    @if (isset($comics))
        @foreach ($comics as $comic)
        @endforeach
    @endif

</body>

</html>
