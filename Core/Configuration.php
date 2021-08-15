<?php

class Configuration
{
    public $homePageName;
    public $use_db;
    public $db_hostname;
    public $db_database;
    public $db_username;
    public $db_password;
    public function __construct()
    {
        $this->homePageName = "Welcome";
        $this->use_db = false;
        $this->db_hostname = "";
        $this->db_database = "";
        $this->db_username = "";
        $this->db_password = "";
    }

    public function homePage() {
        return $this->homePageName;
    }

    public function unsetSession($name){
        unset($_SESSION[$name]);
    }

    public function getSession($name){
        if (isset($_SESSION[$name]))
            return $_SESSION[$name];
    }

    public function setSession($name, $value){
        $_SESSION[$name] = $value;
    }

    public function get($value = "") {
        $data = "";
        if ($value == "") {
            $data = $_GET;
        }else {
            $data = htmlspecialchars($_GET[$value]);
        }
        return $data;
    }

    public function post($value = ""){
        if ($value == "") {
            $data = $_POST;
        }else {
            $data = htmlspecialchars($_POST[$value]);
        }
        return $data;
    }

    public function createLink($path = "") {
        return dirname($_SERVER['SCRIPT_NAME']) . "/" . $path;
    }

    public function stylesheets($styles = null)
    {
        $datas = "";
        if ($styles != null) {
            $stylesheets = explode(",", $styles);
            foreach ($stylesheets as $stylesheet) {
                $datas .= "<link href='{$stylesheet}' rel='stylesheet'>\n";
            }
        }
        return $datas;
    }

    public function scripts($scripts = null)
    {
        $datas = "";
        if ($scripts != null) {
            $scripts = explode("," , $scripts);
            foreach ($scripts as $script) {
                $datas .= "<script src='{$script}'></script>\n";
            }
        }
        return $datas;
    }

    // DATABASE CONFIG
    public function use_db(){
        return $this->use_db;
    }

    public function db_hostname()
    {
        return $this->db_hostname;
    }

    public function db_database()
    {
        return $this->db_database;
    }

    public function db_username()
    {
        return $this->db_username;
    }

    public function db_password()
    {
        return $this->db_password;
    }
}