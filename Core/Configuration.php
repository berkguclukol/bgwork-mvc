<?php

class Configuration
{
    public $homepage;
    public $use_db;

    public function __construct()
    {
        $this->homepage = "Welcome";
        $this->use_db = false;
    }

    public function unset_session($name){
        unset($_SESSION[$name]);
    }

    public function get_session($name){
        if (isset($_SESSION[$name]))
            return $_SESSION[$name];
    }

    public function set_session($name, $value){
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

    public function get_link($path = "") {
        return dirname($_SERVER['SCRIPT_NAME']) . "/" . $path;
    }

    public function get_styles($styles = null)
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

    public function get_scripts($scripts = null)
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
}