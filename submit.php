<?php
// Retrieve POST data
$x = $_POST["Username"];
$y = $_POST["Password"];

// Check if username and password are not empty
if (empty($x) || empty($y)) {
    die("Error: Username or password is empty");
}

// Hash the password
$hashed_password = password_hash($y, PASSWORD_DEFAULT);

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "slutuppgift_elever";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind SQL statement
$sql = "INSERT INTO elever (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("ss", $x, $hashed_password);

// Execute statement
if ($stmt->execute()) {
    // Redirect to display.php after successful insertion
    header("Location: elever.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();
?>