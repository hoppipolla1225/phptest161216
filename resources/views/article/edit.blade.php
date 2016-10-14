<html>
    @extends('layout')
    @section('content')
    <h2>記事作成フォーム</h2>
    {!! Form::open(['action'=>'ArticleController@store']) !!}
        <div class="form-group">
            {!! Form::label('title', 'タイトル：') !!}
            {!! Form::text('title', $article->title, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', '説明文：') !!}
            {!! Form::text('description', $article->description, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', '本文：') !!}
            {!! Form::textarea('body', $article->body, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('編集完了', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}

    @endsection
</html>
