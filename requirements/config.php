<?php
//To display errors (Use this if the php.ini settings is not set)
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

define('hostname', 'localhost');
define('username','root');
define('password','');
define('database','iprc');

require_once('notify.php');
$conn = new mysqli(hostname, username, password, database);

if (!$conn) {
  Notify("Database connectivity failed contat admin");
  die();
}
