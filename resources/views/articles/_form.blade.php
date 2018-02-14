<div class="form-group">
    {!! Form::label('title', 'Article Title: ') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', 'Body: ') !!}
    {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('published_at', 'Publish on: ') !!}
    {!! Form::input('date', 'published_at',
    \Carbon\Carbon::now()->format('Y-m-d'),
    ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('tag_list', 'Tags:'); !!}
    {!! Form::select('tag_list[]', $tag_list, null,
    ['class'=>'form-control', 'multiple']) !!}
</div>

<div class="form-group">
    {!! Form::button($submitButtonText,
    ['class' => 'btn btn-primary form-control',
     'type' => 'submit' ]) !!}
</div>