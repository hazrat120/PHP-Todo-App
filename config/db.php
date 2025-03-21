<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "todo_app";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>