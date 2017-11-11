<?php

$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$langs = ('languages/'.core_.$language.'.php');

 if(file_exists($langs)) {
	include_once($langs);
 }else{
	include_once('languages/core_en.php');
 }

?>