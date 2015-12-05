<div class='form-group'>
    {!! Form::label($settingName, $moduleInfo['description']) !!}
    @if (isset($dbSettings[$settingName]))
        {!! Form::input('number', $settingName, Input::old($settingName, $dbSettings[$settingName]->value), ['class' => 'form-control', 'placeholder' => trans($moduleInfo['description'])]) !!}
    @else
        {!! Form::input('number', $settingName, Input::old($settingName), ['class' => 'form-control', 'placeholder' => trans($moduleInfo['description'])]) !!}
    @endif
</div>
