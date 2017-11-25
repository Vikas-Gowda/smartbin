<?php

error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
ob_start();
session_start();

define('PROJECT_NAME', 'User Registration with Email Verification with PHP and Mysql- www.smartbin.tk');

define('DB_DRIVER', 'mysql');
define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'id985784_smartbin');
define('DB_SERVER_PASSWORD', 'amith9481447790');
define('DB_DATABASE', 'id985784_root');

// must end with a slash
define('SITE_URL', 'http://smartbin.tk/');

$dboptions = array(
    PDO::ATTR_PERSISTENT => FALSE,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try {
  $DB = new PDO(DB_DRIVER . ':host=' . DB_SERVER . ';dbname=' . DB_DATABASE, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, $dboptions);
} catch (Exception $ex) {
  echo $ex->getMessage();
  die;
}

?>