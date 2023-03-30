<?php
require("header.php");

?>
<html>
<body align =center>
<div class="alert alert-success" role="alert">
<strong>
<div class="container">
	<p align="center">List Item</p>
	<?php 
		
		require("connection.php");
		$query = "SELECT * FROM user ";
		$result =mysqli_query($conn,$query) or die("Invalid query");
		$num = mysqli_num_rows($result);
		
		echo "<table class=\"table table-bordered\">
		<tr>
		<th>username</th>
		<th>password</th>
		<th>firstname</th>
		<th>lastname</th>
		<th>email</th>
		<th>action</th>

		</tr>";
			
	for($i=0; $i<$num; $i++) {
	$row = mysqli_fetch_row($result);
				
		echo "<tr><td>" . $row[0] . "</td><td>" . $row[1];
		echo "</td><td>" . $row[2] . "</td><td>" . $row[3];
		echo "</td><td>" . $row[4] .  "</td>";

		
		echo "<td><a href=\"delete.php?username=".$row[0]."\">Delete</a> | ";		
		echo "<a href=\"update.php?username=".$row[0]."\">Update</a></td></tr>";
		
	}
		echo "</table>";
		mysqli_close($conn);
		

	?>
	
	
	
</div>
</strong>
</div>
</body>
</html>
<?php
echo "<a href=\"formlogin.php\"> | BACK | </a>";

?>
