<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $product->name }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $product->title }}</p>
</div>

<!-- Sub Title Field -->
<div class="form-group">
    {!! Form::label('sub_title', 'Sub Title:') !!}
    <p>{{ $product->sub_title }}</p>
</div>

<!-- Read More Link Field -->
<div class="form-group">
    {!! Form::label('read_more_link', 'Read More Link:') !!}
    <p>{{ $product->read_more_link }}</p>
</div>

<!-- View Website Link Field -->
<div class="form-group">
    {!! Form::label('view_website_link', 'View Website Link:') !!}
    <p>{{ $product->view_website_link }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $product->image }}</p>
</div>

