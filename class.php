<?php

class DBHandler
{
    function get()
    {
    }
}

class MySQLHandler extends DBHandler
{
    // 这里一个create
    public static function create()
    {
        echo "MySQL";
        return new self();
    }

    public function get()
    {
        echo "MySQL get()"；}
}

class MemcachedHandler extends DBHandler
{
    // 这里又有一个create
    public static function create()
    {
        echo "Memcached";
        return new self();
    }

    public function get()
    {
        echo "Memcached get";
    }
}

function get(DBHandler $handler)
{
    $handler->get();
}

$dbHandler = MySQLHandler::create();
get($dbHandler);

?>
