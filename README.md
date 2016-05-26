# laravel-iseries


It provides DB2 Connection by extending the Illuminate Database component of the laravel framework. Tested on laravel 5.2

---

A customized version of https://github.com/cooperl22/laravel-db2

- [Installation](#installation)
- [Registering the Package](#registering-the-package)
- [Configuration](#configuration)
- [Env](#env)

## Installation

Add laravel-db2 to your composer.json file:

```
"require": {
    "jacksonwebservices/laravel-iseries": "3.0.*"
}
```

Use [composer](http://getcomposer.org) to install this package.

```
$ composer update
```

### Registering the Package

Add the laravel-db2 Service Provider to your config in ``app/config/app.php``:

```php
'providers' => [
    JWS\Iseries\IseriesServiceProvider::class,
],
```

### Configuration

Simply add this code at the end of your ``config/database.php`` file:

```
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

```

###ENV 

```
    DB2_host=ip_address
    DB2_user=user
    DB2_pw=pw
    DB2_ODBC_name=connectionname
    DB2_default_table=defaulttable
    
```
