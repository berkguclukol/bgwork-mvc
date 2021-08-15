<?php
require "Core/Configuration.php";

class App
{
    public $configuration;
    public $database;
    public $db;

    public function __construct()
    {
        $this->configuration = new Configuration();
        if (($this->configuration->use_db)) {
            require "Core/Database.php";
            $database = new Database();
            $db = new BasicDB($database->DB_Hostname(),$database->DB_Database(),$database->DB_Username(),$database->DB_Password());
        }
    }

    public function run($page){
        $page = ($page == "") ? $this->configuration->homepage : $page;
        $controller = __DIR__ . "../Application/Controllers/" . $page . ".php";
        if (file_exists($controller)) {
            require $controller;
        }
        require "Application/Views/Common/Header.php";
        require "Application/Views/{$page}.php";
        require "Application/Views/Common/Footer.php";
    }
}