<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <h1>イベント一覧</h1>
    <ul>
        @foreach ($scores as $score)
            <li><a href="/scores/{{ $score->id }}">{{ $score->event }}</a></li>
        @endforeach
    </ul>

    <a class="btn" href="{{ route('scores.create') }}">新規イベント登録</a>

</body>

</html>
