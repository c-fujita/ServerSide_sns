<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <header class="page-header">

        <h1>みんなの掲示板</h1>

    </header>

    <div class="container">

        <p><a class="btn btn-success" href="/create-form">投稿する</a></p>

        <h2>みんなの投稿</h2>

        <table class="table table-hover">

            <tr>
                <th>投稿No</th>
                <th>ユーザーネーム</th>
                <th>投稿内容</th>
                <th>投稿日時</th>
            </tr>
            @foreach($list as $list)
            <tr>
                <td>{{ $list->id }}</td>
                <td>{{ $list->user_name }}</td>
                <td>{{ $list->contents }}</td>
                <td>{{ $list->created_at }}</td>
            </tr>
            @endforeach
        </table>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</body>
</html>