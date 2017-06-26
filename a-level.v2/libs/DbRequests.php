<?php

namespace libs;

class DbRequests
{
    protected $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

}

$request = new DbRequests(DbConnect::getConnect());