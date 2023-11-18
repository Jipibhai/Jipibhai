<?php
$servername = "sql12.freesqldatabase.com";
$username = "sql12663058";
$password = "nvGHtELAT8";
$dbname = "sql12663058";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Escape user inputs for security
$name = $conn->real_escape_string($_POST['name']);
$phone = $conn->real_escape_string($_POST['phone']);

// Attempt insert query execution
$sql = "INSERT INTO ASDF4 (name, phone) VALUES ('$name', '$phone')";
if ($conn->query($sql) === TRUE) {
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . $conn->error;
}

// Close connection
$conn->close();
?>
