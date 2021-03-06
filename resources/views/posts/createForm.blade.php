@extends('layouts.app')


@section('content')
    <div class="main">
        <h2>新しく投稿する</h2>

        {!! Form::open(['url' => 'post/create']) !!}

        <div class="form-group">

            {!! Form::input('text','userName',null,['required','class'=>'form-control form-control1','placeholder'=>'ユーザーネーム']) !!}
                @if($errors->has('userName'))
                    <ul>
                        <li class="alert alert-danger">{{ $errors->first('userName')}}</li>
                    </ul>
                @endif
            {!! Form::input('text','newPost',null,['required','class'=>'form-control form-control2','placeholder'=>'ここになにか書いてみよう！']) !!}
                @if($errors->has('newPost'))
                    <ul>
                        <li class="alert alert-danger">{{ $errors->first('newPost')}}</li>
                    </ul>
                @endif
        </div>

        <button type="submit" class="btn btn-add"><i class="fas　fa-thin fa-circle-plus"></i>投稿する</button>

        {!! Form::close() !!}
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
@endsection