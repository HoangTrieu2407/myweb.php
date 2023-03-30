<?php 
		require("connection.php");
		$id = $_REQUEST["id"];		
		$name = $_REQUEST["name"];
		$numberoff = $_REQUEST["numberoff"];
		
	
		if ($id !="")
		{
			$sql = "UPDATE student SET name='$name', numberoff='$date' ,  WHERE id='$id'";
			if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully";
			} else {
			echo "Error updating record: " . $conn->error;
			}
	$conn->close();
		}
echo "<a href=\"info.php\"> | BACK | </a>";
?>