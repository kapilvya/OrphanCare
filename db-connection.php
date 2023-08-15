<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "orphan";
$port=3307;

// Database Connection
$conn = mysqli_connect($servername, $username, $password, $databasename,$port);

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


?>