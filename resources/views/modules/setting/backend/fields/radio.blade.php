<div class="checkbox">
    @foreach ($moduleInfo['options'] as $value => $optionName)
        <label for="{{ $optionName }}">
                <input id="{{ $optionName }}"
                        name="{{ $settingName }}"
                        type="radio"
                        class="flat-blue"
                        {{ isset($dbSettings[$settingName]) && (bool)$dbSettings[$settingName]->value == $value ? 'checked' : '' }}
                        value="{{ $value }}" />
                {{ trans($optionName) }}
        </label>
    @endforeach
</div>
