<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Add User</label>
		<div class="login-form">
			<form class="sign-up-htm" action="../connection/dataentry.php" method="post">
				<div class="group">
					<label for="user" class="label">Full Name</label>
					<input id="user" type="text" name="fullname" class="input">
				</div>
                <div class="group">
					<label for="user" class="label">Phone</label>
					<input id="user" type="text" name="phone" class="input">
				</div>
                <div class="group">
					<label for="pass" class="label">Username</label>
					<input id="pass" type="text" name="username" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Create Password</label>
					<input id="pass" type="password" class="input" name="password" data-type="password">
				</div>

				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
				</form>
		</div>
	</div>
</div>
</body>
</html>