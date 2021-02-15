<!-- Fullname Field -->
<div class="form-group">
    {!! Form::label('fullname', 'Fullname:') !!}
    <p>{{ $consultation->fullname }}</p>
</div>

<!-- Company Field -->
<div class="form-group">
    {!! Form::label('company', 'Company:') !!}
    <p>{{ $consultation->company }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $consultation->email }}</p>
</div>

<!-- Phone Number Field -->
<div class="form-group">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    <p>{{ $consultation->phone_number }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $consultation->description }}</p>
</div>

