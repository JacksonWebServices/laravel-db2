<?php
namespace JWS\Iseries\Connectors;

use Illuminate\Database\Connectors\Connector;
use Illuminate\Database\Connectors\ConnectorInterface;

class ODBCConnector extends Connector implements ConnectorInterface
{

    public function connect(array $config)
    {
        $dsn = $this->getDsn($config);

        $options = $this->getOptions($config);

        $connection = $this->createConnection($dsn, $config, $options);

        if (isset($config['schema']))
        {
            $schema = $config['schema'];

          $connection->prepare("set schema $schema")->execute();
        }

        return $connection;
    }

    protected function getDsn(array $config) {
        extract($config);

        $dsn = "odbc:"
             // General settings
             . "Driver=$driverName;"
             . "System=$host;"
             . "UserID=$username;"
             . "Password=$password;"
             //Server settings
             . "Database=$database;"
             . "CommitMode=$commitMode;"
             . "ConnectionType=$connectionType;"
             . "DefaultLibraries=$defaultLibraries;"
             . "Naming=$naming;"
             . "AllowDataCompression=$allowDataCompression;"
             . "DefaultPkgLibrary=$defaultPkgLibrary;"
             . "DefaultPackage=$defaultPackage;"
             . "ExtendedDynamic=$extendedDynamic;"
             . "AllowUnsupportedChar=$allowUnsupportedChar;"
             . "ForceTranslation=$forceTranslation;"
             . "LibraryView=$libraryView;"
             . "Trace=$trace;"
             ;

        return $dsn;
    }

}
