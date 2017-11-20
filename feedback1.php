<?php
extract($_POST);
$hn=$_POST['hotelname'];
$yn=$_POST['yourname'];
$em=$_POST['email'];
$mes=$_POST['message'];

$servername="localhost";
$username="root";
$password="";
$dbname="newdb";

$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO feedback (hotelname, yourname, email, message)
VALUES ('$hn', '$yn', '$em', '$mes')";
//$sql= "CREATE DATABASE newdb";
/*$sql= "CREATE TABLE feedback (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
hotelname VARCHAR(30) NOT NULL,
yourname VARCHAR(30) NOT NULL,
email VARCHAR(50),
message VARCHAR(100)
)";*/

if (mysqli_query($conn, $sql)) {
    echo "Record added successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
