<?php
// This will be how we get a SQL connection
/**
 * @return mysqli
 */
function getSqlConnection() {
    $connection = new mysqli(
        // See https://wikitech.wikimedia.org/wiki/Help:Toolforge/Database for others
        'ruwiki.web.db.svc.wikimedia.cloud',
        getenv( 'TOOL_REPLICA_USER' ),
        getenv( 'TOOL_REPLICA_PASSWORD' ),
        'ruwiki_p'
    );

    if ($connection->connect_error) {
        throw new RuntimeException("Connection failed: " . $connection->connect_error);
    }

    return $connection;
}
?>
