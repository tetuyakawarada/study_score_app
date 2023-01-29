<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="contner">
        <h2 class='page_title'>新規登録</h2>

        @if ($errors->any())
            <div class="error-group">
                <p>
                    <b>{{ count($errors) }}件のエラーがあります。</b>
                </p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>■{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/scores" method="post">
            @csrf

            <div class="label-group">
                <div class="event-group">
                    <label class="label" for="event">イベント</label><br>
                    <input class="event_input" type="text" name="event" value="{{ old('event') }}">
                </div>

                <div class="date-group">
                    <label class="label" for="date">実施日</label><br>
                    <input class="date_input" type="date" name="date" value="{{ old('date') }}">
                </div>
            </div>

            <div class="label-group">
                <div class="memo-group">
                    <label class="label" for="body">メモ</label><br>
                    <textarea class="memo-textarea" name="body">{{ old('body') }}</textarea>
                </div>
            </div>


            <div class="score-group">
                <div>
                    <h4>あなたの得点</h4>
                </div>

                <div class="subject-group">
                    <div class="subject">
                        <label class="label" for="jap_sco">国語</label><br>
                        <input class="score-input" type="text" pattern="^[1-9][0-9]*$" name="jap_sco"
                            value="{{ old('jap_sco') }}">
                    </div>

                    <div class="subject">
                        <label class="label" for="soc_sco">社会</label><br>
                        <input class="score-input" type="text" pattern="^[1-9][0-9]*$" name="soc_sco"
                            value="{{ old('soc_sco') }}">
                    </div>

                    <div class="subject">
                        <label class="label" for="mat_sco">数学</label><br>
                        <input class="score-input" type="text" pattern="^[1-9][0-9]*$" name="mat_sco"
                            value="{{ old('mat_sco') }}">
                    </div>

                    <div class="subject">
                        <label class="label" for="sci_sco">理科</label><br>
                        <input class="score-input" type="text" pattern="^[1-9][0-9]*$" name="sci_sco"
                            value="{{ old('sci_sco') }}">
                    </div>

                    <div class="subject">
                        <label class="label" for="eng_sco">英語</label><br>
                        <input class="score-input" type="text" pattern="^[1-9][0-9]*$" name="eng_sco"
                            value="{{ old('eng_sco') }}">
                    </div>

                    <div class="subject">
                        <label class="label" for="mus_sco">音楽</label><br>
                        <input class="score-input" type="text" pattern="^[1-9][0-9]*$" name="mus_sco"
                            value="{{ old('mus_sco') }}">
                    </div>

                    <div class="subject">
                        <label class="label" for="art_sco">美術</label><br>
                        <input class="score-input" type="text" pattern="^[1-9][0-9]*$" name="art_sco"
                            value="{{ old('art_sco') }}">
                    </div>

                    <div class="subject">
                        <label class="label" for="phy_sco">保健</label><br>
                        <input class="score-input" type="text" pattern="^[1-9][0-9]*$" name="phy_sco"
                            value="{{ old('phy_sco') }}">
                    </div>

                    <div class="subject">
                        <label class="label" for="hom_sco">家庭</label><br>
                        <input class="score-input" type="text" pattern="^[1-9][0-9]*$" name="hom_sco"
                            value="{{ old('hom_sco') }}">
                    </div>

                </div>
            </div>

            <div class="score-group">
                <div>
                    <h4>平均点</h4>
                </div>

                <div class="subject-group">
                    <div class="subject">
                        <label class="label" for="jap_ave">国語</label><br>
                        <input class="score-input" type="text" pattern="^([1-9]\d*|0)(\.\d+)?$" name="jap_ave"
                            value="{{ old('jap_ave') }}">
                    </div>

                    <div class="subject">
                        <label class="label" for="soc_ave">社会</label><br>
                        <input class="score-input" type="text" pattern="^([1-9]\d*|0)(\.\d+)?$" name="soc_ave"
                            value="{{ old('soc_ave') }}">
                    </div>

                    <div class="subject">
                        <label class="label" for="mat_ave">数学</label><br>
                        <input class="score-input" type="text" pattern="^([1-9]\d*|0)(\.\d+)?$" name="mat_ave"
                            value="{{ old('mat_ave') }}">
                    </div>

                    <div class="subject">
                        <label class="label" for="sci_ave">理科</label><br>
                        <input class="score-input" type="text" pattern="^([1-9]\d*|0)(\.\d+)?$" name="sci_ave"
                            value="{{ old('sci_ave') }}">
                    </div>

                    <div class="subject">
                        <label class="label" for="eng_ave">英語</label><br>
                        <input class="score-input" type="text" pattern="^([1-9]\d*|0)(\.\d+)?$" name="eng_ave"
                            value="{{ old('eng_ave') }}">
                    </div>

                    <div class="subject">
                        <label class="label" for="mus_ave">音楽</label><br>
                        <input class="score-input" type="text" pattern="^([1-9]\d*|0)(\.\d+)?$" name="mus_ave"
                            value="{{ old('mus_ave') }}">
                    </div>

                    <div class="subject">
                        <label class="label" for="art_ave">美術</label><br>
                        <input class="score-input" type="text" pattern="^([1-9]\d*|0)(\.\d+)?$" name="art_ave"
                            value="{{ old('art_ave') }}">
                    </div>

                    <div class="subject">
                        <label class="label" for="phy_ave">保健</label><br>
                        <input class="score-input" type="text" pattern="^([1-9]\d*|0)(\.\d+)?$" name="phy_ave"
                            value="{{ old('phy_ave') }}">
                    </div>

                    <div class="subject">
                        <label class="label" for="hom_ave">家庭</label><br>
                        <input class="score-input" type="text" pattern="^([1-9]\d*|0)(\.\d+)?$" name="hom_ave"
                            value="{{ old('hom_ave') }}">
                    </div>

                </div>
            </div>


            <div class="button-group">
                <input class="btn" type="submit" value="登録">
                <a class="btn" href="{{ route('scores.index') }}">一覧へ戻る</a>
            </div>
            <div class="clear"></div>
        </form>
    </div>


</body>

</html>
