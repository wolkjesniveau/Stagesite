<div class="form-group">
    {{ Form::label('naam', 'Naam') }}
    {{ Form::text('naam', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('omschrijving', 'Omschrijving') }}
    {{ Form::textarea('omschrijving', null, array('class' => 'form-control')) }}
</div>


{{ Form::submit('Bevestigen', array('class' => 'btn btn-primary')) }}