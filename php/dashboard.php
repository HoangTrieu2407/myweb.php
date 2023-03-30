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
		$query = "SELECT * FROM student ";
		$result =mysqli_query($conn,$query) or die("Invalid query");
		$num = mysqli_num_rows($result);
		
		echo "<table class=\"table table-bordered\">
		<tr>
		<th>id</th>
		<th>name</th>
		<th>numberoff</th>
		<th>address</th>
		<th>action</th>
		</tr>";
			
	for($i=0; $i<$num; $i++) {
	$row = mysqli_fetch_row($result);
		echo "<tr><td>".$row[0]."</td><td>".$row[1];
		echo "</td><td>".$row[2]."</td>";
		echo "<td><a href=\"delete.php?id=".$row[0]."\">Delete</a> | ";
		
		echo "<a href=\"update.php?id=".$row[0]."\">Update</a></td></tr>";
		
	}
		echo "</table>";
		mysqli_close($conn);
		

	?>
</div>
</strong>
</div>
</body>
</html>
