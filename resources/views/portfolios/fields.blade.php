<!-- Technology Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('technology', 'Technology:') !!}
    {!! Form::textarea('technology', null, ['class' => 'form-control']) !!}
</div>

<!-- Industry Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('industry', 'Industry:') !!}
    {!! Form::textarea('industry', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Sub Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sub_title', 'Sub Title:') !!}
    {!! Form::text('sub_title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Blade Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('blade_link', 'Blade Link:') !!}
    {!! Form::text('blade_link', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('portfolios.index') }}" class="btn btn-light">Cancel</a>
</div>
