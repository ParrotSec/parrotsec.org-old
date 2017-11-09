<?php

$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

	if(!isset($language) || $language == "en") {
		require_once('languages/core_en.php');
	} elseif($language == "ar") {
		require_once('languages/core_ar.php');
	} elseif($language == "de") {
		require_once('languages/core_de.php');
	} elseif($language == "fr") {
		require_once('languages/core_fr.php');
	} elseif($language == "it") {
		require_once('languages/core_it.php');
	} elseif($language == "nl") {
		require_once('languages/core_nl.php');
	} elseif($language == "ro") {
		require_once('languages/core_ro.php');
	} elseif($language == "ru") {
		require_once('languages/core_ru.php');
	}

?>