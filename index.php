<?php
require "Core/Configuration.php";
$configuration = new Configuration();
$page = (isset($_GET["q"])) ? $_GET["q"] : "";
$page = ($page == "") ? $page = $configuration->homePage() : $withCommon = true;
if (($configuration->use_db())) {
    require __DIR__ . "/Core/BasicDB.php";
    $db = new BasicDB($configuration->db_hostname(),$configuration->db_database(),$configuration->db_username(),$configuration->db_password());
}
$controllerFile = "Application/Controllers/" . ucfirst($page) . ".php";
if (file_exists($controllerFile)) {
    require $controllerFile;
}
require "Application/Views/Common/Header.php";
require "Application/Views/{$page}.php";
require "Application/Views/Common/Footer.php";