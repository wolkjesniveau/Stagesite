<div class="form-group">
    {{ Form::label('naam', 'Naam: ') }}
    {{ Form::text('naam', null, ['class' => 'form-control']) }}
    @include('errors.validation', ['error' => 'naam'])
</div>

<div class="form-group">
    {{ Form::label('address', 'address: ') }}
    {{ Form::text('address', null,['class' => 'form-control']) }}
    @include('errors.validation', ['error' => 'address'])
</div>

<div class="form-group">
    {{ Form::label('postcode', 'Postcode: ') }}
    {{ Form::text('postcode', null, ['class' => 'form-control']) }}
    @include('errors.validation', ['error' => 'postcode'])
</div>

<div class="form-group">
    {{ Form::label('plaats', 'Plaats: ') }}
    {{ Form::text('plaats', null, ['class' => 'form-control']) }}
    @include('errors.validation', ['error' => 'plaats'])
</div>

<div class="form-group">
    {{ Form::label('telnr', 'Telefoonnummer: ') }}
    {{ Form::text('telnr', null, ['class' => 'form-control']) }}
    @include('errors.validation', ['error' => 'telnr'])
</div>

{{ Form::submit('Verzenden', ['class' => 'btn btn-primary']) }}