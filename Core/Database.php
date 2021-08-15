<?php
require __DIR__ . "/BasicDB.php";

class Database
{
    public $hostname;
    public $database;
    public $username;
    public $password;

    public function __construct()
    {
        $this->hostname = "";
        $this->database = "";
        $this->username = "";
        $this->password = "";
    }

    public function DB_Hostname()
    {
        return $this->hostname;
    }

    public function DB_Database()
    {
        return $this->database;
    }

    public function DB_Username()
    {
        return $this->username;
    }

    public function DB_Password()
    {
        return $this->password;
    }
}