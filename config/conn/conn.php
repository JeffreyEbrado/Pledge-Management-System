<?php

require_once('secure_config.php');

$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Use the database con for your operations...
// Here..

// Close
$conn->close();

?>