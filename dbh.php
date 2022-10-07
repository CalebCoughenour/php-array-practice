<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "array_prac";

$conn = mysqli_connect($server, $username, $password, $database, 3307);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}