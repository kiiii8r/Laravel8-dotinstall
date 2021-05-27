<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>My BBS</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    {{-- public フォルダからのパスを使って URL を指定する --}}
</head>
<body>
    <div class="container">
        <div class="back-link">
            &laquo; <a href="/">Back</a>
        </div>

        <h1>{{ $post }}</h1>
    </div>
</body>
</html>
