<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration </title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	<form method="post" action="server.php">
		<div class="input-group">
			<label>Username (*required)</label>
			<input type="text" name="username" required>
		</div>
		<div class="input-group">
			<label>Email (*required)</label>
			<input type="text" name="email" required>
		</div>
		<div class="input-group">
			<label>Password (*required)</label>
			<input type="password" name="password" required>
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>
