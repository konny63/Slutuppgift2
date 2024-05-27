<?php
$servername = "localhost";
$username = "Konrad";
$password = "Sommar24";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE MyDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create/check connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Username VARCHAR(30) NOT NULL,
User_id VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($_SERVER["REQUEST METHOD"]== "POST" ) {
  if (empty($_POST["username"] )){
    $nameErr = "Username is required"
  } else {
    $Username = test_input($_post["username"]);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
        $nameErr = ""
      }

  }
}

if ($conn->query($sql) === TRUE) {
  echo "Table 'Users' created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

<?php 
$_Username = $_POST["Username"];
$_Password = $_POST["User_id"];

$con = new mysqli('localhost','root','','phpdata');
if ($con -> connect_error) {
die('Connection failed :'.$conn -> connect_error);
}
else{
$stmt = $con->query("INSERT INTO Users(Username, User_id,)
    values($_username,$_Password)");
$stmt->bind_param("ssssiss",$Username, $User_id,);
$stmt->execute();
echo "Sign up successful";
$stmt->close();
$con->close();
 }?>