<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
</body>
</html>



<?php
include "connection.php";
mysqli_select_db($conn, "grouphdb");

    if (isset($_POST['update'])) {
        $Id = $_POST['id'];
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "UPDATE `grouph` SET `fullname`='$fullname',`phone`='$phone',`username`='$username',`password`='$password' WHERE `id`='$Id'";
        $result = $conn->query($sql);
        if ($result == TRUE) {
            echo "Record updated successfully.";
            header("Location: info.php");
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }

    }

if (isset($_GET['id'])) {
    $Id = $_GET['id'];         
    $sql = "SELECT * FROM grouph WHERE id='$Id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $fullname = $row['fullname'];
            $phone = $row['phone'];
            $username = $row['username'];
            $password = $row['password'];
        }
    ?>



        <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab"></label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Edit Data</label>
		<div class="login-form">

			<form class="sign-up-htm" action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
				<div class="group">
					<label for="user" class="label">Full Name</label>
					<input id="user" type="text" name="fullname" class="input" value="<?php echo $fullname; ?>">
				</div>
                <div class="group">
					<label for="user" class="label">Phone</label>
					<input id="user" type="text" name="phone" class="input" value="<?php echo $phone; ?>">
				</div>
                <div class="group">
					<label for="pass" class="label">Username</label>
					<input id="pass" type="text" name="username" class="input" value="<?php echo $username; ?>">
				</div>
				<div class="group">
					<label for="pass" class="label">Create Password</label>
					<input id="pass" type="password" class="input" name="password" data-type="password" value="<?php echo $password; ?>">
				</div>

				<div class="group">
					<input type="submit" class="button" name="update" value="Confirm Edit">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
				</form>
		</div>
	</div>
</div>

    <?php
    } else{
        header('Location: info.php');
    }
}
?>