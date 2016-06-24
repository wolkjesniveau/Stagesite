<div class="form-group">
    {{ Form::label('begin_DATE', 'Begin datum: ') }}
    {{ Form::date('begin_DATE', null, ['class' => 'form-control']) }}
    @include('errors.validation', ['error' => 'begin_DATE'])
</div>

<div class="form-group">
    {{ Form::label('eind_DATE', 'Eind datum: ') }}
    {{ Form::date('eind_DATE', null,['class' => 'form-control']) }}
    @include('errors.validation', ['error' => 'eind_DATE'])
</div>

{{ Form::submit('Verzenden', ['class' => 'btn btn-primary']) }}