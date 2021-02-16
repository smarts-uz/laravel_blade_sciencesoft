<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $blog->user_id }}</p>
</div>

<!-- Tag Field -->
<div class="form-group">
    {!! Form::label('tag', 'Tag:') !!}
    <p>{{ $blog->tag }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $blog->image??asset('images/default-image.png') }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $blog->title }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $blog->description }}</p>
</div>

<!-- Description Text Field -->
<div class="form-group">
    {!! Form::label('description_text', 'Description Text:') !!}
    <p>{{ $blog->description_text }}</p>
</div>
