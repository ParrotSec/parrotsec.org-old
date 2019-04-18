<?php
$languages = array(
    'it' => 'Italian',
    'en' => 'English',
    'es' => 'Español',
    'fr' => 'Français',
    'ru' => 'Русский',
    'tr' => 'Türkçe',
    'uz' => 'Uzbek',
    'pt' => 'Portuguese',
    'ir' => 'فارسی',

);

if(isset($_GET['lang'])){
    $language = $_GET['lang'];
} else {
    $language = 'en';
}

$file_path = "languages/core_$language.php";
if(file_exists($file_path))
    include_once($file_path);

else
    include_once('languages/core_en.php');

?>
