<?php
require "../../../config/defined_access/db_config.php";

// Create connection
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

// Check connection
if ($conn->connect_error) {
    die(json_encode(["message" => "Connection failed: " . $conn->connect_error]));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cite_id = $_POST['login_citeid'];
    $password = $_POST['login_password'];

    $sql = "SELECT cite_id, password, status FROM " . TB_USERS . " WHERE cite_id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $cite_id);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($db_cite_id, $db_password, $db_status);
        $stmt->fetch();

        if ($password === $db_password) {
            // Password match, set Cite ID and status in session
            session_start();
            $_SESSION['cite_id'] = $db_cite_id;
            $_SESSION['status'] = $db_status;

            echo json_encode(["message" => "Login successful"]);
        } else {
            echo json_encode(["message" => "Incorrect password"]);
        }
    } else {
        echo json_encode(["message" => "Cite ID not found"]);
    }

    $stmt->close();
}

$conn->close();
?>
