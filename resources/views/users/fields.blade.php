<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Persona Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('persona_id', 'Persona Id:') !!}
    {!! Form::number('persona_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Roll Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('roll_id', 'Roll Id:') !!}
    {!! Form::number('roll_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Visible Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visible', 'Visible:') !!}
    {!! Form::text('visible', null, ['class' => 'form-control']) !!}
</div>

<!-- Remember Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', null, ['class' => 'form-control']) !!}
</div>

<!-- Director Field -->
<div class="form-group col-sm-6">
    {!! Form::label('director', 'Director:') !!}
    {!! Form::number('director', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">Cancel</a>
</div>
