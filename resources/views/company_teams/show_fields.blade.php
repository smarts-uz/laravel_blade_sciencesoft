<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $companyTeam->name }}</p>
</div>

<!-- Job Field -->
<div class="form-group">
    {!! Form::label('job', 'Job:') !!}
    <p>{{ $companyTeam->job }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $companyTeam->image }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $companyTeam->description }}</p>
</div>

