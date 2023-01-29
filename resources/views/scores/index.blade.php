<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index-style.css') }}">


</head>

<body>
    <header>

    </header>

    <div class="index-container">

        <div class="index-list">
            <a class="btn" href="{{ route('scores.create') }}">新規イベント登録</a>
            <h3>イベント一覧</h3>
            <ul>
                @foreach ($scores as $score)
                    <li class="test2"><a class="test" href="/scores/{{ $score->id }}">{{ $score->event }}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="index-box">
            @foreach ($scores as $score)
                <div class=" aaa">
                    <a href="/scores/{{ $score->id }}">{{ $score->event }}</a>
                    {{-- <li><a href="/scores/{{ $score->id }}">{{ $score->event }}</a></li> --}}

                </div>
            @endforeach
        </div>

    </div>

    <footer>
    </footer>

</body>

</html>
