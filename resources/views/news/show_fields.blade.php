<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $news->image??asset('images/default-image.png') }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $news->title }}</p>
</div>

<!-- Sub Title Field -->
<div class="form-group">
    {!! Form::label('sub_title', 'Sub Title:') !!}
    <p>{{ $news->sub_title }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $news->description }}</p>
</div>

