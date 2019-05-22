<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_alexiaguerrini";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// set utf-8 mb_list_encoding
$conn->set_charset("utf8");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
