<?php

$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, '', DB_PORT);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the database exists, if not, create it
$dbCheckQuery = "SHOW DATABASES LIKE '" . DB_NAME . "'";
$result = $conn->query($dbCheckQuery);

if ($result->num_rows == 0) {
    $createDBQuery = "CREATE DATABASE " . DB_NAME;
    if ($conn->query($createDBQuery) === TRUE) {
        echo "Database created successfully.";
    } else {
        die("Error creating database: " . $conn->error);
    }
}

// Close the initial connection
$conn->close();
?>
