<?php
$first = $_POST['fname'];
$last = $_POST['lname'];
$e_mail = $_POST['email'];
$pass = $_POST['pwd'];


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

$sql = "INSERT INTO `signup_info`(`first name`, `last name`, `email`, `password`) 
VALUES ('$first','$last','$e_mail','$pass')";

$rs = mysqli_query($conn, $sql);

if($rs) {
    echo "Data stored successfully";
} else {
    echo "Error occurred";
}

$mysqli->close();

?>