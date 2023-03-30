<?php
	REQUIRE ("connection.php");
	if(isset($_POST["btn-reg"])){
		
		$username = $_POST["username"];
		$password = $_POST["password"];
		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$email = $_POST["email"];
		
		if(!empty($username)&&!empty($password)&&!empty($firstname)&&
		!empty($lastname)&&!empty($email)){
			echo "<pre>";
			print_r($_POST);
			
			$sql= "INSERT INTO `user` (`username`,`password`,`firstname`,`lastname`,`email`) VALUES('$username',md5('$password'),'$firstname','$lastname','$email') ";
				
			if($conn->query($sql)===TRUE){
				echo "Input data sucessfully!";
			}else{
				echo "Error {$sql}".$conn->error;
			}
		}
		else{
			echo "Your information must be fullfilled!";
			
		}
		
	}
	echo "<a href=\"dashboard.php\"> | BACK | </a>";	

?>