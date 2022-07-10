@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="form-cover">
            <h2>みんなの投稿</h2>

            {!! Form::open() !!}
            <div class="form-group">

                {!! Form::input('text','search',null,['placeholder'=>'投稿内容を検索']) !!}
                <button type="submit" class="btn btn-search"><i class="fas fa-thin fa-magnifying-glass"></i></button>

            </div>
        </div>

        <p><a class="btn btn-add" href="/create-form"><i class="fas　fa-thin fa-circle-plus"></i>投稿する</a></p>

        <table class="box2 box2-hover">

            <tr>
                <th>No.</th>
                <th>なまえ</th>
                <th>投稿内容</th>
                <th>投稿日時</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($list as $list)
            <tr>
                <td>{{ $list->id }}</td>
                <td>{{ $list->user_name }}</td>
                <td>{{ $list->contents }}</td>
                <td>{{ $list->created_at }}</td>

                <td><a class="btn btn-primary" href="/post/{{ $list->id }}/edit-form"><i class="fas fa-thin fa-pencil"></i></a></td>
                <td><a class="btn btn-del" href="/post/{{ $list->id }}/delete" onclick="return confirm('この投稿を削除しますか？')"><i class="fas fa-thin fa-trash-can"></i></a></td>
            </tr>
            @endforeach
        </table>
    </div>

    {!! Form::close() !!}

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

@endsection