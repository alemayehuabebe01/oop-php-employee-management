<?php 

require_once("db-config-define.php");

$db_name = DB_NAME;
$db_host = DB_HOST;
$db_user = DB_USER;
$db_password = DB_PASSWORD;

$mysqli = new mysqli($db_host, $db_user,$db_password,$db_name);


if($mysqli->connect_errno > 0){
    die ("Error: " .$mysqli->connect_error);
}