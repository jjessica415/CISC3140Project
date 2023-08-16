<?php

$name = $_POST['nm'];
$email = $_POST['mail'];
$message = $_POST['msg'];



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

//$sql = "INSERT INTO 'form_info' ('Name', 'Username', 'Email', 'Amount', 'Address', 'Contact', 'Shipping', 'Finisher') 
        //VALUES ('$name','$insta','$mail','$amt','$add','$ques','$ship','$fin')";

$sql ="INSERT INTO `contact_info`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";

$rs = mysqli_query($conn, $sql);

if($rs) {
    echo "Data stored successfully";
} else {
    echo "Error occurred";
}

$mysqli->close();

?>