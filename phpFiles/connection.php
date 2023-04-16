<?php
$mysqli = new mysqli("localhost","sameerdev","admin786@","sameer");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>