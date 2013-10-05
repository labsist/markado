<?php

//version check
//bootstrap login 
//php configuration special
//
//folder permission check
//core/modlul/class/function/method




header('Content-type: text/html');

error_reporting(E_ALL);
ini_set("display_errors", 1);
date_default_timezone_set('Europe/Istanbul');

$betik_zd = date_default_timezone_get();
$q = isset($_GET ['q']) ? $_GET ['q'] : null;
$q = rtrim($q, '/');
$q = explode('/', $q);
//phpinfo();
?>
