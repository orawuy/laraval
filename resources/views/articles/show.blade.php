@extends('layouts.main')
@section('content')
 <div class="page-header" id="banner">
    <h1>{{ $article->title }}</h1>
    <a class="btn btn-primary" href="{{ url("articles/{$article->id}/edit") }}">
        Edit
    </a>
 </div>
 <div class="panel panel-default">
    <div class="panel-body">
        {{ $article->body }}
    </div>
 </div>
 <div class="panel-footer">
    {{ $article->published_at }}
 </div>
 <div>
    {!! Form::open(['method' => 'DELETE',
        'url' => 'articles/'. $article->id
       ]) !!}
       {!! Form::submit('DELETE', ['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}
 </div>
 @unless($article->tags->isEmpty())
    <div>Tags:
        <ul>
            @foreach($article->tags as $tag)
            <li>{{ $tag->name }}</li>
            @endforeach
        </ul>
    </div>
@endunless
<img src="{{ url($article->image) }}" alt="Article Image" />
@stop
