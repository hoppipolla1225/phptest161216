<html>
  @extends('layout')
  @section('content')
    <h2>記事一覧</h2>
      @foreach($articles as $article)
        <p>{{$article->id}}</p>
        <p>{{$article->title}}</p>
        <p>{{$article->description}}</p>
        <p>{{$article->body}}</p>
        <p>{{$article->created_at}}</p>        
      @endforeach
  @endsection
</html>
