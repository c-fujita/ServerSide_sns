@extends('layouts.app')

@section('content')
    <div class="main">

        <div class="form-cover">
            <h2>みんなの投稿</h2>

            {!! Form::open() !!}
                <div class="form-group">

                    {!! Form::input('text','search',null,['placeholder'=>'投稿内容を検索','class'=> 'search']) !!}
                    <button type="submit" class="btn btn-search"><i class="fas fa-thin fa-magnifying-glass"></i></button>

                </div>

            {!! Form::close() !!}

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
            @foreach($list as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->user_name }}</td>
                <td>{{ $post->contents }}</td>
                <td>{{ $post->created_at }}</td>

                <td><a class="btn btn-primary" href="/post/{{ $post->id }}/edit-form"><i class="fas fa-thin fa-pencil"></i></a></td>
                <td><a class="btn btn-del" href="/post/{{ $post->id }}/delete" onclick="return confirm('この投稿を削除しますか？')"><i class="fas fa-thin fa-trash-can"></i></a></td>
            </tr>
            @endforeach
        </table>

        {{ $list->links() }}
    </div>


    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

@endsection