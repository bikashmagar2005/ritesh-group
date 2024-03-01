<?php
include 'connection.php';


mysqli_select_db($conn, "grouphdb");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $phone = $_POST["phone"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "INSERT INTO grouph (fullname, phone, username, password)
    VALUES ('$fullname', '$phone',  '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: ../project/index.php");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
