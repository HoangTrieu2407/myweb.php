<?php
	$conn=mysqli_connect("localhost","root","")
	or die("No connection!".mysqli_error($conn));
	mysqli_select_db($conn , "sinhvien")
	or die('db will not open'.mysqli_error($conn));
	$query = "SELECT * FROM student";
	$result = mysqli_query($conn, $query) 
	or die("Invalid query");
?>