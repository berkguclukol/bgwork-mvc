<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?=$this->configuration->get_styles("https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css")?>
    <title><?=(isset($title)) ? $title . " • Welcome to BG Mvc System!" : "Welcome to BG Mvc System" ?></title>
</head>
<body class="bg-gray-100 p-10">