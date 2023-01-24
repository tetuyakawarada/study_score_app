<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>

<body>
    <h1>イベント一覧</h1>
    <ul>
        @foreach ($scores as $score)
            <li><a href="/scores/{{ $score->id }}">{{ $score->event }}</a></li>
        @endforeach
    </ul>
</body>

</html>
