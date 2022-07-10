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
        <h2>投稿内容を編集する</h2>

        {!! Form::open(['url' => '/post/edit']) !!}

        <div class="form-group">
            {!! Form::hidden('id', $post->id) !!}

            {!! Form::input('text','upUserName',$post->user_name,['required','class'=>'form-control']) !!}
            {!! Form::input('text','upPost',$post->contents,['required','class'=>'form-control']) !!}

        </div>

        <button type="submit" class="btn btn-success">編集</button>

        {!! Form::close() !!}
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>