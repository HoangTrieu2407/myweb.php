<?php
	echo $_REQUEST["id"];
	require("connection.php");
	$temp = $_REQUEST["id"];
	
	if($temp != ""){
	$query = "DELETE FROM student WHERE `id` = '$temp'";
	$result = mysqli_query($conn, $query) or die("Invalid query");
		if($result > 0)
			echo "Value is succesfully deleted";
		else
			echo "No action delete!";
	}
echo "<a href=\"info.php\"> | BACK | </a>";
?>
