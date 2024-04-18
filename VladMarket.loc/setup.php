<?php

$host="localhost";
$user="root";
$password="";
$db_name="vladmarket_bd";

$link=mysqli_connect($host, $user, $password, $db_name);
$link->query("SET NAMES utf-8");

?>