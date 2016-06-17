<div class="form-group">
    {{ Form::label('naam', 'Naam: ') }}
    {{ Form::text('naam', null, array('class' => 'form-control')) }}
    @include('errors.validation', ['error' => 'naam'])
</div>

<div class="form-group">
    {{ Form::label('address', 'address: ') }}
    {{ Form::text('address', null, array('class' => 'form-control')) }}
    @include('errors.validation', ['error' => 'address'])
</div>

<div class="form-group">
    {{ Form::label('postcode', 'Postcode: ') }}
    {{ Form::select('postcode', ['asdfghg' => 'asdfghg'], null, array('class' => 'form-control')) }}
    @include('errors.validation', ['error' => 'postcode'])
</div>

<div class="form-group">
    {{ Form::label('plaats', 'Plaats: ') }}
    {{ Form::select('plaats', ['123456' => '1'], null, array('class' => 'form-control')) }}
    @include('errors.validation', ['error' => 'plaats'])
</div>

<div class="form-group">
    {{ Form::label('telnr', 'Telefoonnummer: ') }}
    {{ Form::select('telnr', ['1' => '1'], null, array('class' => 'form-control')) }}
    @include('errors.validation', ['error' => 'telnr'])
</div>

{{ Form::submit('Verzenden', array('class' => 'btn btn-primary')) }}