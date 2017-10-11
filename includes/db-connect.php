<?php

$host = "localhost"; // Host name
$db_username = "root"; // Mysql username
$password = ""; // Mysql password (mine is empty as my SQL database on localhost has no password)
$db_name = "register"; // Database name

$connect = mysqli_connect($host, $db_username, $password, $db_name);
// Check connection
if (!$connect) {
    die("Database Connection Failed" . mysqli_error());
}
