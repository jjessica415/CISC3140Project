<?php
// for the value inside the brackets, its the same as 
// the value of the name attribute in the html file

$name = $_POST['nm'];
$insta = $_POST['ig'];
$mail = $_POST['email'];
$amt = $_POST['amount'];
$add = $_POST['address'];
$ques = $_POST['q1'];
$ship = $_POST['shipping'];
$fin= $_POST['finisher'];
// $optn = "";
// foreach ($name as $t) {
//     $optn = $optn.$t.",";
// }

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

$sql = "INSERT INTO `fulfillment_info`(`name`, `username`, `email`, `amount`, `address`, `contact`, `shipping`, `finisher`) VALUES ('$name','$insta','$mail','$amt','$add','$ques','$ship','$fin')";

$rs = mysqli_query($conn, $sql);

if($rs) {
    echo "Data stored successfully";
} else {
    echo "Error occurred";
}

$mysqli->close();

?>