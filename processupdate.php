<?php 
		require("connection.php");
		$username = $_REQUEST["username"];		
		$password = $_REQUEST["password"];
		$password1 = $_REQUEST["password1"];
		$email = $_REQUEST["email"];
		$firstname = $_REQUEST["firstname"];
		$lastname = $_REQUEST["lastname"];
		
		//neu password và password1 không giống nhau thì ko cho update
		//nếu password để trống => thì ko update password
		$q1 = '';
		if($password !== $password1)
			echo "Can nhap mat khau hai lan giong nhau";
		else{
			if($password !== '')
				$q1 = ", password ='".md5($password)."'";
			else{
				
				if ($username !="")
				{
					$sql = "UPDATE user SET username='$username', email='$email' ,lastname ='$lastname', firstname = '$firstname'".$q1." WHERE username='$username'";
					if ($conn->query($sql) === TRUE) {
					echo "Record updated successfully";
					} else {
					echo "Error updating record: " . $conn->error;
					}
			$conn->close();
				}
		}
		}
echo "<a href=\"dashboard.php\"> | BACK | </a>";
?>