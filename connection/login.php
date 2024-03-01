<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connection.php';

    mysqli_select_db($conn, "grouphdb");

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM grouph WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION["username"] = $username;
        header("location: info.php");
    } else {
        $_SESSION["login_error"] = "Invalid username or password";
    }
}
?>
