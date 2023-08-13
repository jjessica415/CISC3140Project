<?php

$conn = new mysqli("localhost", "root", "root", "info");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM 'data_table'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row["Name"]. "Username" . $row["Username"] . "Email" . $row["Email"] . "Amount" . $row["Amount"] . "Address" . $row["Address"] . "Contact" . $row["Contact"] . "Shipping" . $row["Shipping"] . "Finisher" . $row["Finisher"]."<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

?>