<div class='form-group'>
    {!! Form::label($settingName, trans($moduleInfo['description'])) !!}
    @if (isset($dbSettings[$settingName]))
        {!! Form::text($settingName, Input::old($settingName, $dbSettings[$settingName]->value), ['class' => 'form-control', 'placeholder' => trans($moduleInfo['description'])]) !!}
    @else
        {!! Form::text($settingName, Input::old($settingName), ['class' => 'form-control', 'placeholder' => trans($moduleInfo['description'])]) !!}
    @endif
</div>
