# β¨ BG MVC System

This system houses the roof that uses it specifically for our projects.

## π₯  Installation

After downloading the main branch, the installation starts by calling the address.

```html
https://localhost/bgwork-mvc
https://example.com/bgwork-mvc
```

## βοΈSystem settings

All settings for system at:
```html
Core/Configuration.php
```
```php
<?php
class Configuration
{
    public function __construct()
    {
        $this->homePageName = "Welcome";
        $this->use_db = false;
    }
}
?>
```
## π₯οΈ Database settings
If the database is to be used, you need to change the `use_db` value (in the Configuration file.) and make the settings in the file below. The default value is set to `false`.
```html
Core/Database.php
```
```php
<?php
class Database
{
    public function __construct()
    {
        $this->hostname = "";
        $this->database = "";
        $this->username = "";
        $this->password = "";
    }
}
?>
```
## π  Homepage settings
If you want to edit the default home page, you can find it at:
```html
Application/Views/Welcome.php
```
The corresponding controller for default home page is found at:
```html
Application/Controllers/Welcome.php
```
## π Masterpage settings
The masterpage files of the system are below. You can change the settings at any time by entering this file.
```html
Application/Views/Common/Header.php
Application/Views/Common/Footer.php
```

## π Common Functions Usage
For style files, file paths are separated by commas and sent to the following function.
```php
<?php
echo $configuration->get_styles("bootstrap.min.css,style.min.css");
?>
```
File paths for script files are separated by commas and sent to the following function.
```php
<?php
echo $configuration->get_scripts("jquery.min.js,custom.min.js,main.min.js");
?>
```
## π Session's Function Usage
```php
<?php
echo $configuration->set_session($name, $value); // $_SESSION[$name] = $value;
echo $configuration->get_session($name);         // $_SESSION[$name];
echo $configuration->unset_session($name);       // unset($_SESSION[$name]);
?>
```
## π Method's Function Usage
```php
<?php
echo $configuration->get($name);    // $_GET[$name];
echo $configuration->post($name);   // $_POST[$name];
?>
```

## π Link Function Usage
```php
<?php
echo $configuration->get_link(); // Return home page link
echo $configuration->get_link("Detail"); // Return specific page link
?>
```
## π Technology
Technologies used in the framework are:
- [Tailwind CSS](https://tailwindcss.com/) - Rapidly build modern websites without ever leaving your HTML.
- [PHP 7.4](https://www.php.net/) - Hypertext Preprocessor
- [jQuery](https://jquery.com/) - jQuery

## π° Licence
[BG Work](https://bgwork.co)
[Guclukol](https://guclukol.net)
