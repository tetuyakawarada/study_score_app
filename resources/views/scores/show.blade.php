<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>{{ $score->event }}</h1>
    <h2>実施日：{{ $score->date_format }}</h2>
    <h2>5教科合計：{{ $score->total_score }}点</h2>
    <h2>5教科平均：{{ $score->total_score_ave }}点</h2>

    <p>国語：{{ $score->jap_sco }}点</p>
    <p>社会：{{ $score->soc_sco }}点</p>
    <p>数学：{{ $score->mat_sco }}点</p>
    <p>理科：{{ $score->sci_sco }}点</p>
    <p>英語：{{ $score->eng_sco }}点</p>

    <p>{!! nl2br(e($score->body)) !!}</p>

    <a class="btn" href="/scores/{{ $score->id }}/edit">編集する</a>
    <a class="btn" href="{{ route('scores.index') }}">一覧へ戻る</a>

</body>

</html>
