<?php
// Create connection
$conn = mysqli_connect("localhost", "root", "", "web_php");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>