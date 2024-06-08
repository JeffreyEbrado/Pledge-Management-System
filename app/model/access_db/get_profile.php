<?php
$dbhost = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'pledge_data';
$dbport = '3307';

// Create connection
$conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbname, $dbport);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve image data from the database
$sql = "SELECT image FROM Registered_Users WHERE cite_id='" . $_SESSION['cite_id'] . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the image data
    $row = $result->fetch_assoc();
    $imageData = $row['image'];

    // Debugging: Check if image data is retrieved
    if ($imageData) {
        $base64Image = base64_encode($imageData);
        echo '<img class="profile_view" src="data:image/jpeg;base64,' . $base64Image . '" />';
    } else {
        echo "Image data is empty.";
    }
    
} else {
    echo "No image found for the specified user.";
}

$conn->close();
?>
