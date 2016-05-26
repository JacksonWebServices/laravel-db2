<?php

return [
    
    
    
    'connections' => [

        'odbc' => [
            'driver'               => 'odbc',
            'driverName'           => '{iSeries Access ODBC Driver}',
             // General settings
            'host'                 => env('DB2_host'),
            'username'             => env('DB2_user'),
            'password'             => env('DB2_pw'),
            //Server settings
            'database'             => env('DB2_ODBC_name'),
            'prefix'               => '',
            'schema'               => env('DB2_default_table'),
            'signon'               => 3,
            'ssl'                  => 0,
            'commitMode'           => 2,
            'connectionType'       => 0,
            'defaultLibraries'     => '',
            'naming'               => 0,
            'unicodeSql'           => 0,
            // Format settings
            'dateFormat'           => 5,
            'dateSeperator'        => 0,
            'decimal'              => 0,
            'timeFormat'           => 0,
            'timeSeparator'        => 0,
            // Performances settings
            'blockFetch'           => 1,
            'blockSizeKB'          => 32,
            'allowDataCompression' => 1,
            'concurrency'          => 0,
            'lazyClose'            => 0,
            'maxFieldLength'       => 15360,
            'prefetch'             => 0,
            'queryTimeout'         => 1,
            // Modules settings
            'defaultPkgLibrary'    => 'QGPL',
            'defaultPackage'       => 'A/DEFAULT(IBM),2,0,1,0',
            'extendedDynamic'      => 1,
            // Diagnostic settings
            'QAQQINILibrary'       => '',
            'sqDiagCode'           => '',
            // Sort settings
            'languageId'           => 'ENU',
            'sortTable'            => '',
            'sortSequence'         => 0,
            'sortWeight'           => 0,
            'jobSort'              => 0,
            // Conversion settings
            'allowUnsupportedChar' => 0,
            'ccsid'                => 1208,
            'graphic'              => 0,
            'forceTranslation'     => 0,
            // Other settings
            'allowProcCalls'       => 0,
            'DB2SqlStates'         => 0,
            'debug'                => 0,
            'trueAutoCommit'       => 0,
            'catalogOptions'       => 3,
            'libraryView'          => 0,
            'ODBCRemarks'          => 0,
            'searchPattern'        => 1,
            'translationDLL'       => '',
            'translationOption'    => 0,
            'maxTraceSize'         => 0,
            'multipleTraceFiles'   => 1,
            'trace'                => 0,
            'traceFilename'        => '',
            'extendedColInfo'      => 0,
            'options'  => [
                PDO::ATTR_CASE => PDO::CASE_LOWER,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::ATTR_PERSISTENT => false
            ]
            
        ],

    ]

];


/*

    // default settings
    
    'connections' => [

        'ibmi' => [
            'driver'               => 'odbc' / 'ibm',
            'driverName'           => '{IBM i Access ODBC Driver}' / '{iSeries Access ODBC Driver}',
             // General settings
            'host'                 => 'server',
            'username'             => '',
            'password'             => '',
            //Server settings
            'database'             => 'WRKRDBDIRE entry',
            'prefix'               => '',
            'schema'               => 'default schema',
            'signon'               => 3,
            'ssl'                  => 0,
            'commitMode'           => 2,
            'connectionType'       => 0,
            'defaultLibraries'     => '',
            'naming'               => 0,
            'unicodeSql'           => 0,
            // Format settings
            'dateFormat'           => 5,
            'dateSeperator'        => 0,
            'decimal'              => 0,
            'timeFormat'           => 0,
            'timeSeparator'        => 0,
            // Performances settings
            'blockFetch'           => 1,
            'blockSizeKB'          => 32,
            'allowDataCompression' => 1,
            'concurrency'          => 0,
            'lazyClose'            => 0,
            'maxFieldLength'       => 15360,
            'prefetch'             => 0,
            'queryTimeout'         => 1,
            // Modules settings
            'defaultPkgLibrary'    => 'QGPL',
            'defaultPackage'       => 'A/DEFAULT(IBM),2,0,1,0',
            'extendedDynamic'      => 1,
            // Diagnostic settings
            'QAQQINILibrary'       => '',
            'sqDiagCode'           => '',
            // Sort settings
            'languageId'           => 'ENU',
            'sortTable'            => '',
            'sortSequence'         => 0,
            'sortWeight'           => 0,
            'jobSort'              => 0,
            // Conversion settings
            'allowUnsupportedChar' => 0,
            'ccsid'                => 1208,
            'graphic'              => 0,
            'forceTranslation'     => 0,
            // Other settings
            'allowProcCalls'       => 0,
            'DB2SqlStates'         => 0,
            'debug'                => 0,
            'trueAutoCommit'       => 0,
            'catalogOptions'       => 3,
            'libraryView'          => 0,
            'ODBCRemarks'          => 0,
            'searchPattern'        => 1,
            'translationDLL'       => '',
            'translationOption'    => 0,
            'maxTraceSize'         => 0,
            'multipleTraceFiles'   => 1,
            'trace'                => 0,
            'traceFilename'        => '',
            'extendedColInfo'      => 0,
            'options'  => [
                PDO::ATTR_CASE => PDO::CASE_LOWER,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::ATTR_PERSISTENT => false
            ],
            'toolkit' => [
                'XMLServiceLib' => 'XMLSERVICE',
                'debug' => false,
                'debugLogFile' => storage_path() . '/logs/toolkit.log',
                'InternalKey' => '/tmp/' . 'Toolkit_' . app()->environment() . '_' . rand(1, 10),
                'stateless' => false,
                'plugSize' => '4K',
                'ccsidBefore' => "819/1147",
                'ccsidAfter' => "1147/819",
                'useHex' => true
            ]
        ],

    ]
    
*/

