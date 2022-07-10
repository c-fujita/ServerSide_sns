<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

    <header>
        <h1 class="page-header">みんなの掲示板</h1>
    </header>

    <div class="container">
        <h2>新しく投稿する</h2>

        {!! Form::open(['url' => 'post/create']) !!}

        <div class="form-group">

            {!! Form::input('text','userName',null,['required','class'=>'form-control','placeholder'=>'ユーザーネーム']) !!}
            {!! Form::input('text','newPost',null,['required','class'=>'form-control','placeholder'=>'ここになにか書いてみよう！']) !!}

        </div>

        <button type="submit" class="btn btn-success">投稿する</button>

        {!! Form::close() !!}
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>