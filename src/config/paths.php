<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Modules path
    |--------------------------------------------------------------------------
    |
    | This path used for save the generated module. This path also will added
    | automatically to list of scanned folders.
    |
    */

    'modules' => base_path('Modules'),

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
        base_path('vendor/*/*'),
    ],

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

    'migration' => app_path('database/migrations'),

    /*
    |--------------------------------------------------------------------------
    | Generator path
    |--------------------------------------------------------------------------
    | 
    | Here you may update the modules generator path.
    |
    */

    'generator' => [
        'assets'        => 'Assets',
        'config'        => 'Config',
        'command'       => 'Console',
        'migration'     => 'Database/Migrations',
        'model'         => 'Entities',
        'repository'    => 'Repositories',
        'seeder'        => 'Database/Seeders',
        'controller'    => 'Http/Controllers',
        'filter'        => 'Http/Filters',
        'request'       => 'Http/Requests',
        'provider'      => 'Providers',
        'lang'          => 'Resources/lang',
        'views'         => 'Resources/views',
        'test'          => 'Tests',
    ],

    /*
    |--------------------------------------------------------------------------
    | Composer File Template
    |--------------------------------------------------------------------------
    | 
    | Here is the config for composer.json file, generated by this package
    | in every module since version > 1.1.11.
    |
    */
    'composer' => [
        'vendor' => 'pingpong-modules',
        'author' => [
            "name" => 'Pingpong Labs',
            'email' => 'pingpong.labs@gmail.com'
        ]
    ]
    
];