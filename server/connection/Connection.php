<?php

class Connection
{
    private $serverName;
    private $database;
    private $username;
    private $password;

    public function connection_database()
    {

        $serverName = "10.164.30.174";
        $database = "mvc-database";
        $username = "mis_dev";
        $password = "M1S_D3v2021";

        $conn = new PDO("mysql:host=$serverName;dbname=$database", $username, $password);
        return $conn;
    }


}