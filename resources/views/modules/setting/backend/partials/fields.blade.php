@foreach ($settings as $settingName => $moduleInfo)

    <?php $fieldView = str_contains($moduleInfo['view'], '::') ? $moduleInfo['view'] : "setting::backend.fields.{$moduleInfo['view']}" ?>

    @include($fieldView, [
        'settings' => $settings,
        'setting' => $settingName,
        'moduleInfo' => $moduleInfo,
        'settingName' => strtolower($currentModule) . '::' . $settingName
    ])

@endforeach
