<!DOCTYPE html>
<html>
<head>
	<title>registration </title>
</head>
<body>
<div class="container">
	<div class="header">
		<h2>Register</h2>
	</div>
	<form action="registration.php" method="post">
		<div>
			<lable for="username">Username</lable>
			<input type="text" name="username" required>
		</div>
		<div>
			<lable for="email">Email</lable>
			<input type="email" name="email" required>
		</div>
		<div>
			<lable for="password">Password</lable>
			<input type="password" name="password_1" required>
		</div>
		<div>
			<lable for="password">Confirm password</lable>
			<input type="password" name="password_2" required>
		</div>
		<button type="submit" name="login_user">Submit</button>
		<p>Already a user ? <a href="login.php"><b>Log in</b></a></p>	
	</form>
	</div>
</body>
</html>
