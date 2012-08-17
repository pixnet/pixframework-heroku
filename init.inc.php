<?php

include(__DIR__ . '/libs/pixframework/Pix/Loader.php');
set_include_path(
    __DIR__ . '/libs/pixframework'
    . PATH_SEPARATOR . __DIR__ . '/models'
);
Pix_Loader::registerAutoLoad();

if (getenv('DATABASE_URL')) {
    if (!preg_match('#postgres://([^:]*):([^@]*)@([^/:]*)(:\d+)?/(.*)#', strval(getenv('DATABASE_URL')), $matches)) {
        $user = $matches[1];
        $pass = $matches[2];
        $host = $matches[3];
        $port = ltrim($matches[4], ':') ?: 1486;
        $dbname = $matches[5];
        Pix_Table::setDefaultDb(new Pix_Table_Db_Adapter_PgSQL(array('user' => $user, 'password' => $pass, 'host' => $host, 'dbname' => $dbname)));
    }   
}
