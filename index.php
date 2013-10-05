<?php

//version check
//bootstrap login 
//php configuration special
//
//folder permission check
//core/modlul/class/function/method




header('Content-type: text/html');

@ini_set("display_errors", 1);
@ini_set( 'error_reporting', E_ALL ); 
date_default_timezone_set('Europe/Istanbul');
$q = isset($_GET ['q']) ? $_GET ['q'] : null;
$q = rtrim($q, '/');
$q = explode('/', $q);
//phpinfo();



?>
