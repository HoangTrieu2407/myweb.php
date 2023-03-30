
<?php
require("connection.php");
session_start(); // Starting Session

$error=''; // Variable To Store Error Message

	if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
	$error = "Username or Password is invalid";
	}
	else
	{
// Define $username and $password
	$username=$_POST['username'];
	$password=$_POST['password'];
	
// To protect MySQL injection for Security purpose
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysqli_real_escape_string($conn, $username);
		$password = mysqli_real_escape_string($conn, $password);
		
// SQL query to fetch information of registerd users and finds user match.
		$password=md5($password);
		
		$query = mysqli_query($conn, "select * from user where password='$password' AND username='$username'");
		$rows = mysqli_num_rows($query);
		
		if ($rows == 1) {
		$_SESSION['login_user']=$username; // Initializing Session
		header("location: web.php"); // Redirecting To Other Page
			}
	 else {
		$error = "Username or Password is invalid";
		echo $error;
		}
		mysqli_close($conn); // Closing Connection
	}
}
?>