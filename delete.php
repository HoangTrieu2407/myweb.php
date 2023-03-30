<?php
	echo $_REQUEST["username"];
	require("connection.php");
	$temp = $_REQUEST["username"];
	
	if($temp != ""){
	$query = "DELETE FROM user WHERE `username` = '$temp'";
	$result = mysqli_query($conn, $query) or die("Invalid query");
		if($result > 0)
			echo "Value is succesfully deleted";
		else
			echo "No action delete!";
	}
echo "<a href=\"dashboard.php\"> | BACK | </a>";
?>
