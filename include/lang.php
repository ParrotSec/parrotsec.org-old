<?php

$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

include_once 'languages/'.core_.$language.'.php';

?>