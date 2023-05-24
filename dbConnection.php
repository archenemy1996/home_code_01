<?php
$databaseHost = '192.168.1.14';
$databaseName = 'test';
$databaseUsername = 'example';
$databasePassword = 'password';

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
