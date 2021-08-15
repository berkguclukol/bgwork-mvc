<?php
require "Core/Configuration.php";
$configuration = new Configuration();
$page = (isset($_GET["q"])) ? $_GET["q"] : "";
$page = ($page == "") ? $page = $configuration->homePage() : $withCommon = true;

if (($configuration->use_db())) {
    require "Core/Database.php";
    $database = new Database();
    $db = new BasicDB($database->DB_Hostname(),$database->DB_Database(),$database->DB_Username(),$database->DB_Password());
}

$controllerFile = "Application/Controllers/" . ucfirst($page) . ".php";
if (file_exists($controllerFile)) {
    require $controllerFile;
}
require "Application/Views/Common/Header.php";
require "Application/Views/{$page}.php";
require "Application/Views/Common/Footer.php";