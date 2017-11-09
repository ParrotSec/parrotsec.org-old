<?php

$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

 if(file_exists('languages/'.core_.$language.'.php')) {
	include_once('languages/'.core_.$language.'.php');
 }else{
	include_once('languages/core_en.php');
 }

?>