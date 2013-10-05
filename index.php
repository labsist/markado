<?php

//version check
//bootstrap login 
//php configuration special
//
//folder permission check
//core/modlul/class/function/method




header('Content-type: text/html');

@ini_set("display_errors", 1);
@ini_set('error_log',  'var/logs/php/error_log'); /* path to server-writable log file */
@ini_set( 'error_reporting', E_ALL ); /* the php parser to  all errors, excreportept notices.  */


date_default_timezone_set('Europe/Istanbul');

$timezone = date_default_timezone_get();
$q = isset($_GET ['q']) ? $_GET ['q'] : null;
$q = rtrim($q, '/');
$q = explode('/', $q);
//phpinfo();



?>
