<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Upload dir
    |--------------------------------------------------------------------------
    |
    | The dir where to store the images (relative from public)
    |
    */
    'dir' => ['../data'],

    /*
    |--------------------------------------------------------------------------
    | Filesystem disks (Flysytem)
    |--------------------------------------------------------------------------
    |
    | Define an array of Filesystem disks, which use Flysystem.
    | You can set extra options, example:
    |
    | 'my-disk' => [
    |        'URL' => url('to/disk'),
    |        'alias' => 'Local storage',
    |    ]
    */
     'local' => [
            'driver' => 'local',
            'root' => storage_path('/var/data'),
            'URL' => env('APP_URL').'/data',
            'alias' => 'Local storage',
        ],

//        'public' => [
//            'driver' => 'local',
//            'root' => storage_path('/data'),
//            'url' => env('APP_URL').'/data',
//            'visibility' => 'public',
//        ],

//        's3' => [
//            'driver' => 's3',
//            'key' => env('AWS_ACCESS_KEY_ID'),
//            'secret' => env('AWS_SECRET_ACCESS_KEY'),
//            'region' => env('AWS_DEFAULT_REGION'),
//            'bucket' => env('AWS_BUCKET'),
//            'url' => env('AWS_URL'),
//        ],

//    ],

    /*
    |--------------------------------------------------------------------------
    | Routes group config
    |--------------------------------------------------------------------------
    |
    | The default group settings for the elFinder routes.
    |
    */

    // To re-enable auth-middleware, reset
    // "null" to "array('web', 'auth')"


    'route' => [
        'prefix' => 'elfinder',
        'middleware' => null,
    ],

    /*
    |--------------------------------------------------------------------------
    | Access filter
    |--------------------------------------------------------------------------
    |
    | Filter callback to check the files
    |
    */

    'access' => 'Barryvdh\Elfinder\Elfinder::checkAccess',

    /*
    |--------------------------------------------------------------------------
    | Roots
    |--------------------------------------------------------------------------
    |
    | By default, the roots file is LocalFileSystem, with the above public dir.
    | If you want custom options, you can set your own roots below.
    |
    */

    'roots' => null,

    /*
    |--------------------------------------------------------------------------
    | Options
    |--------------------------------------------------------------------------
    |
    | These options are merged, together with 'roots' and passed to the Connector.
    | See https://github.com/Studio-42/elFinder/wiki/Connector-configuration-options-2.1
    |
    */

    'options' => array(),

    /*
    |--------------------------------------------------------------------------
    | Root Options
    |--------------------------------------------------------------------------
    |
    | These options are merged, together with every root by default.
    | See https://github.com/Studio-42/elFinder/wiki/Connector-configuration-options-2.1#root-options
    |
    */
    'root_options' => array(

    ),

);
