<?php
extract($_POST);
$fname=$_POST['FName'];
$lname=$_POST['LName'];
$email=$_POST['Email'];
$phone=$_POST['PhNo'];
$message=$_POST['Message'];


$servername="localhost";
$username="root";
$password="";
$db="contactus";

//$dbname="aboutdb";
//create connection
$conn=mysqli_connect($servername,$username,$password,$db);
//mysqli_select_db($dbname);
//check connection
if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}

/*$sql = "CREATE DATABASE contactus";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
$sql = "CREATE TABLE contact (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
phone INT(10) NOT NULL,
message VARCHAR(100)
)";*/
$sql = "INSERT INTO contact (firstname, lastname, email, phone, message)
VALUES ('$fname', '$lname', '$email','$phone','$message')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>
