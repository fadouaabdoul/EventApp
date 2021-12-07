<?php

// php select option value from database

$hostname = "localhost:3308";
$username = "root";
$password = "";
$databaseName = "event";

// connect to mysql database
 
$db_connection = mysqli_connect($hostname, $username, $password, $databaseName);

$query = "SELECT name FROM event";

// for method 1

$result = mysqli_query($db_connection, $query);



?>
