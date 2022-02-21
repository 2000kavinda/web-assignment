<?php
	session_start();
	$username='';
	$email='';
	$errors=array();
	$db = mysqli_connect('localhost' , 'root' , '' , 'registration');
	if(isset($_POST['register'])){
		$username = $_POST["username"];
		$email = $_POST["email"];
		$password = $_POST["password"];
	if(empty($username)){
		array_push($errors,"Username is required");
	}
	if(empty($email)){
		array_push($errors,"Email is required");
	}
	if(empty($password)){
		array_push($errors,"Password is required");
	}

	if(count($errors)==0){
		$password=md5($password);
		$sql = "INSERT INTO user(username,email,password) VALUES ('$username','$email','$password')";
	mysqli_query($db, $sql);
	$_SESSION['username']= $username;
	header('location: 123.html');
	}
}
	if(isset($_POST['login'])){
		$username = $_POST["username"];
		$password = $_POST["password"];
	if(empty($username)){
		array_push($errors,"Username is required");
	}
	if(empty($password)){
		array_push($errors,"Password is required");
	}
	if(count($errors)==0){
		$password=md5($password);
		$query= "SELECT * FROM user WHERE username='$username' AND password='$password'";
		$result=mysqli_query($db,$query);
		if(mysqli_num_rows($result)==1){
			$_SESSION['username']= $username;
			header('location: 123.html');
		}
	}
	}
?>