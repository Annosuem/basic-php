<?php
$databaseHost = 'localhost';
$databaseName = 'db_prem';
$databaseUsername = 'root';
$databasePassword = '';
 
// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);