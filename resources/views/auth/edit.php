<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require __DIR__ . '/../../../config/defined_access/db_config.php';

// Create connection
$conn = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME, $DB_PORT);

// Check connection
if ($conn->connect_error) {
    die(json_encode(["message" => "Connection failed: " . $conn->connect_error]));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cite_id = $_POST['cite_id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $pledge = $_POST['pledge'];

    $sql = "UPDATE Students_Pledge_Record SET firstname='$firstname', lastname='$lastname', pledge='$pledge' WHERE cite_id='$cite_id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$cite_id = $_GET['cite_id'];
$sql = "SELECT firstname, lastname, cite_id, pledge FROM Students_Pledge_Record WHERE cite_id='$cite_id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="hidden" name="cite_id" value="<?php echo $row['cite_id']; ?>">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" value="<?php echo $row['firstname']; ?>"><br><br>
        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" value="<?php echo $row['lastname']; ?>"><br><br>
        <label for="pledge">Pledge:</label>
        <input type="text" id="pledge" name="pledge" value="<?php echo $row['pledge']; ?>"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
