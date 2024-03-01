<?php
    require_once "connection.php";
    mysqli_select_db($conn, "grouphdb");

    $id = $_GET["id"];
    $query = "DELETE FROM grouph WHERE  id = '$id'";
    if (mysqli_query($conn, $query)) {
        header("location: info.php");
    } else {
         echo "Something went wrong. Please try again later.";
    }
?>