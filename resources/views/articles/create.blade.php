@extends('layouts.main')
@section('content')
        <h1 class="page-title">Write a New Article</h1>
        {!! Form::open(['url' => 'articles','files' => true]) !!}

        @include('articles._form', ['submitButtonText' => '<i class="glyphicon glyphicon-plus"></i>Add Article'])

        <!-- <div class="form-group">
            {!! Form::label('title', 'Article Title: ') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Body:') !!}
            {!! Form::textarea('body',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('published_at', 'Publish on: ') !!}
            {!! Form::input('date', 'published_at',
            \Carbon\Carbon::now()->format('Y-m-d'),
            ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Add Article',
            ['class' => 'btn btn-primary form-control']) !!}
        </div> -->
        <!-- @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif -->
        {!! Form::label('image', 'Article Image: ') !!}
        {!! Form::file('image', null) !!}

      
        {!! Form::close() !!}
 
 @include('errors.list')

@stop