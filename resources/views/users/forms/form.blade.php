<div class="form-group">
    {{ Form::label('naam', 'Naam') }}
    {{ Form::text('name', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('email', 'E-mail') }}
    {{ Form::text('email', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('role_id', 'Role') }}
    {{ Form::text('role_id', null, array('class' => 'form-control')) }}
</div>

{{ Form::submit('Bevestigen', array('class' => 'btn btn-primary')) }}