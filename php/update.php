<?php
require("header.php");
?>
<div class="container">
<?php 
	echo $_REQUEST["id"];
	require("connection.php");
	$temp = $_REQUEST["id"];
	
	if($temp != ""){
		$query = "SELECT * FROM student WHERE `id` = '$temp'";
		$result = mysqli_query($conn, $query) or die("Invalid query");
		if($result->num_rows > 0){
			//var_dump($result);
		$data = mysqli_fetch_assoc($result);
		//var_dump($data);
?>
			
			<form action="processupdate.php" method="POST">
			  <div class="mb-3 mt-3">
				<label for="text" class="form-label">ID:</label>
				<input type="text" class="form-control" id="id" placeholder="id" value="<?=$data['id'];?>" name="id">
			  </div>
			  <div class="mb-3">
				<label for="name" class="form-label">NAME:</label>
				<input type="text" class="form-control" value="<?=$data['name'];?>" id="name" placeholder="name" name="name">
			  </div>
			  <div class="mb-3">
				<label for="dateofbirth" class="form-label">NUMBEROFF</label>
				<input type="text" class="form-control" value="<?=$data['numberoff'];?>" id="numberoff" placeholder="DATE OF BIRTH" name="numberoff">
			  </div>
			  
			  <div class="form-check mb-3">
				<label class="form-check-label">
				  <input class="form-check-input" type="checkbox" name="remember"> Remember me
				</label>
			  </div>
			  <input type="hidden" name="id"  value="<?=$data['id'];?>" >
			  
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>

				
<?php
			
		}else
		{
			echo "Ban ghi khong ton tai, hay kiem tra lai";
		}
		
	}
echo "<a href=\"web.php\"> | BACK | </a>";

		
	
?>
</div>
