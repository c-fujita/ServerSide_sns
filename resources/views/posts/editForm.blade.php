@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>編集する？</h2>

        {!! Form::open(['url' => '/post/edit']) !!}

        <div class="form-group">
            {!! Form::hidden('id', $post->id) !!}

            {!! Form::input('text','upUserName',$post->user_name,['required','class'=>'form-control form-control1']) !!}
                @if($errors->has('upUserName'))
                    <ul>
                        <li class="alert alert-danger">{{ $errors->first('upUserName')}}</li>
                    </ul>
                @endif
            {!! Form::input('text','upPost',$post->contents,['required','class'=>'form-control form-control2']) !!}
                @if($errors->has('upPost'))
                    <ul>
                        <li class="alert alert-danger">{{ $errors->first('upPost')}}</li>
                    </ul>
                @endif

        </div>

        <button type="submit" class="btn btn-primary"><i class="fas fa-thin fa-pencil edit-icon"></i>編集する</button>

        {!! Form::close() !!}
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
@endsection