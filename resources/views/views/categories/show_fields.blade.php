<!-- Parent Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Parent Id:') !!}
    <p>{{ $category->category_id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $category->name }}</p>
</div>

<!-- Name Lang Field -->
<div class="form-group">
    {!! Form::label('name_lang', 'Name Lang:') !!}
    <p>{{ $category->name_lang }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $category->description }}</p>
</div>

<!-- Description Lang Field -->
<div class="form-group">
    {!! Form::label('description_lang', 'Description Lang:') !!}
    <p>{{ $category->description_lang }}</p>
</div>

<!-- Icon Field -->
<div class="form-group">
    {!! Form::label('icon', 'Icon:') !!}
    <p>{{ $category->icon }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $category->image }}</p>
</div>

<!-- Path Blade Field -->
<div class="form-group">
    {!! Form::label('path_blade', 'Path Blade:') !!}
    <p>{{ $category->path_blade }}</p>
</div>

<!-- Link Field -->
<div class="form-group">
    {!! Form::label('link', 'Link:') !!}
    <p>{{ $category->link }}</p>
</div>

<!-- Active Field -->
<div class="form-group">
    {!! Form::label('active', 'Active:') !!}
    <p>{{ $category->active }}</p>
</div>
