<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Module Namespace
    |--------------------------------------------------------------------------
    |
    | Default module namespace.
    |
    */

    'namespace' => 'Modules',

    /*
    |--------------------------------------------------------------------------
    | Module Stubs
    |--------------------------------------------------------------------------
    |
    | Default module stubs.
    |
    */

    'stubs' => [
        'enabled' => true,
        'path'    => base_path().'/resources/moduleStubs',
        'files'   => [
            'start'                     => 'start.php',
            'routes/backendRoutes'      => 'Http/backendRoutes.php',
            'routes/frontendRoutes'     => 'Http/frontendRoutes.php',
            'provider/route-provider'   => 'Providers/RouteServiceProvider.php',
            'provider/sidebar-extender' => 'MenuExtenders/SidebarExtender.php',
            'json'                      => 'module.json',
            'views/index'               => 'Resources/views/backend/index.blade.php',
            'scaffold/config'           => 'Config/config.php',
            'composer'                  => 'composer.json',
        ],
        'replacements' => [
            'start'                     => ['LOWER_NAME'],
            'routes/backendRoutes'      => ['LOWER_NAME', 'STUDLY_NAME'],
            'routes/frontendRoutes'     => ['LOWER_NAME', 'STUDLY_NAME'],
            'provider/route-provider'   => ['STUDLY_NAME', 'MODULE_NAMESPACE'],
            'provider/sidebar-extender' => ['STUDLY_NAME', 'MODULE_NAMESPACE'],
            'json'                      => ['LOWER_NAME', 'STUDLY_NAME', 'MODULE_NAMESPACE'],
            'views/index'               => ['LOWER_NAME'],
            'views/master'              => ['STUDLY_NAME'],
            'scaffold/config'           => ['STUDLY_NAME'],
            'composer'                  => [
                'LOWER_NAME',
                'STUDLY_NAME',
                'VENDOR',
                'AUTHOR_NAME',
                'AUTHOR_EMAIL',
                'MODULE_NAMESPACE',
            ],
        ],
    ],
    'paths' => [
        /*
        |--------------------------------------------------------------------------
        | Modules path
        |--------------------------------------------------------------------------
        |
        | This path used for save the generated module. This path also will added
        | automatically to list of scanned folders.
        |
        */

        'modules' => base_path('modules'),
        /*
        |--------------------------------------------------------------------------
        | Modules assets path
        |--------------------------------------------------------------------------
        |
        | Here you may update the modules assets path.
        |
        */

        'assets' => public_path('modules'),
        /*
        |--------------------------------------------------------------------------
        | The migrations path
        |--------------------------------------------------------------------------
        |
        | Where you run 'module:publish-migration' command, where do you publish the
        | the migration files?
        |
        */

        'migration' => base_path('database/migrations'),
        /*
        |--------------------------------------------------------------------------
        | Generator path
        |--------------------------------------------------------------------------
        |
        | Here you may update the modules generator path.
        |
        */

        'generator' => [
            'assets'       => 'Assets',
            'config'       => 'Config',
            'command'      => 'Console',
            'migration'    => 'Database/Migrations',
            'model'        => 'Entities',
            'menuExtender' => 'MenuExtenders',
            'repository'   => 'Repositories',
            'seeder'       => 'Database/Seeders',
            'controller'   => 'Http/Controllers',
            'backend'      => 'Http/Controllers/backend',
            'filter'       => 'Http/Middleware',
            'request'      => 'Http/Requests',
            'provider'     => 'Providers',
            'lang'         => 'Resources/lang',
            'views'        => 'Resources/views',
            'test'         => 'Tests',
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Scan Path
    |--------------------------------------------------------------------------
    |
    | Here you define which folder will be scanned. By default will scan vendor
    | directory. This is useful if you host the package in packagist website.
    |
    */

    'scan' => [
        'enabled' => false,
        'paths'   => [
            base_path('vendor/*/*'),
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Composer File Template
    |--------------------------------------------------------------------------
    |
    | Here is the config for composer.json file, generated by this package
    | in every module since version >= 1.2.0.
    |
    */

    'composer' => [
        'vendor' => 'pingpong-modules',
        'author' => [
            'name'  => 'Pingpong Labs',
            'email' => 'pingpong.labs@gmail.com',
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Caching
    |--------------------------------------------------------------------------
    |
    | Here is the config for setting up caching feature.
    |
    */
    'cache' => [
        'enabled'  => false,
        'key'      => 'pingpong-modules',
        'lifetime' => 60,
    ],

];
