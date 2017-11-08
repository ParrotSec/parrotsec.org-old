<?php
	if(!isset($_GET["lang"])) {
		if(isset($_SESSION['language'])) {
			$language = $_SESSION['language'];
		} else {
			$language = $config[0]['language'];
		}
	} elseif($_GET["lang"] == "ar") {
		$language = "ar";
		$_SESSION['language'] = "ar";
	} elseif($_GET["lang"] == "de") {
		$language = "de";
		$_SESSION['language'] = "de";
	} elseif($_GET["lang"] == "fr") {
		$language = "fr";
		$_SESSION['language'] = "fr";
	} elseif($_GET["lang"] == "it") {
		$language = "it";
		$_SESSION['language'] = "it";
	} elseif($_GET["lang"] == "nl") {
		$language = "nl";
		$_SESSION['language'] = "nl";
	} elseif($_GET["lang"] == "ro") {
		$language = "ro";
		$_SESSION['language'] = "ro";
	} elseif($_GET["lang"] == "ru") {
			$language = "ru";
		$_SESSION['language'] = "ru";
	} else {
		$language = "en";
		$_SESSION['language'] = "en";
	}

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