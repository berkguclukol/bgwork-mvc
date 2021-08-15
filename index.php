<?php
require __DIR__ . "/Core/App.php";
$page = (isset($_GET["q"])) ? ucfirst($_GET["q"]) : "";
$app = new App();
$app->run($page);
?>