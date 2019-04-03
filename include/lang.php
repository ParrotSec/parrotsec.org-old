<?php
$languages = array(
    'it' => 'Italian',
    'en' => 'English',
    'es' => 'Spanish',
    'ru' => 'Russian',
    'tr' => 'Türkçe',
    'uz' => 'Uzbek'
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
