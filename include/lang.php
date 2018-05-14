<?php

#get browser language
$language = htmlentities(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));

#include default english language
include_once('languages/core_en.php');



#override english strings with localized translations if available
if ($language == "ar") {
	include_once('languages/core_ar.php');
}
elseif ($language == "de") {
	include_once('languages/core_de.php');
}
elseif ($language == "fr") {
	include_once('languages/core_fr.php');
}
elseif ($language == "it") {
	include_once('languages/core_it.php');
}
elseif ($language == "nl") {
	include_once('languages/core_nl.php');
}
elseif ($language == "ro") {
	include_once('languages/core_ro.php');
}
elseif ($language == "ru") {
	include_once('languages/core_ru.php');
}
elseif ($language == "uz") {
	include_once('languages/core_uz.php');
}

?>
