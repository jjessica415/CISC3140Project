<?php
$email = $_POST['your_email'];
$pass = $_POST['your_pass'];


// database details
$host = "localhost";
$username = "root";
$password = "root";
$dbname = "cisc3140";

// creating a connection
$conn = mysqli_connect($host, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql ="INSERT INTO `signin_info`(`email`, `password`) VALUES ('$email','$pass')";

$rs = mysqli_query($conn, $sql);

if($rs) {
    echo "Data stored successfully";
} else {
    echo "Error occurred";
}

$mysqli->close();

?>