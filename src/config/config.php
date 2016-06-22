<?php

return [
    
    'connections' => [

        'odbc' => [
            'driver'               => 'odbc',
            'driverName'           => '{iSeries Access ODBC Driver}',
             // General settings
            'host'                 => env('DB2_HOST'),
            'username'             => env('DB2_USER'),
            'password'             => env('DB2_PASSWORD'),
            //Server settings
            'database'             => env('DB2_NAME'),
            'schema'               => env('DB2_DEFAULT_SCHEMA'),
            'commitMode'           => 2,
            'connectionType'       => 0,
            'defaultLibraries'     => 'QGPL',
            'naming'               => 1,
            'allowDataCompression' => 1,
            'defaultPkgLibrary'    => 'QGPL',
            'defaultPackage'       => 'A/DEFAULT(IBM),2,0,1,0',
            'extendedDynamic'      => 0,
            'allowUnsupportedChar' => 0,
            'forceTranslation'     => 0,
            'libraryView'          => 0,
            'trace'                => 0,
            'options'  => [
                PDO::ATTR_CASE => PDO::CASE_LOWER,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::ATTR_PERSISTENT => false
            ]
            
        ],

    ]

];
