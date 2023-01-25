<?php

$DB_SERVER = "localhost:3308";
$DB_USER = "root";
$DB_PASSWORD = "123456";
$DB_DATABASE = "emp";

$con = mysqli_connect($DB_SERVER, $DB_USER, $DB_PASSWORD, $DB_DATABASE);

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}

?>
