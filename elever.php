<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Registered Users</title>
</head>
<body>
    <h1>All Registered Users</h1>
    <?php
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

    // Fetch all records from the 'elever' table
    $sql = "SELECT username, password FROM elever";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Username</th><th>Password (Hidden)</th></tr>";
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . htmlspecialchars($row["username"]) . "</td><td>" . htmlspecialchars($row["password"]) . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }

    // Close connection
    $conn->close();
    ?>
    <a href="index.php">Back to Registration Form</a>
</body>
</html>