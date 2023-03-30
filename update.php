<?php
require("header.php");
?>
<div class="container">
<?php 
	echo $_REQUEST["username"];
	require("connection.php");
	$temp = $_REQUEST["username"];
	
	if($temp != ""){
		$query = "SELECT * FROM user WHERE `username` = '$temp'";
		$result = mysqli_query($conn, $query) or die("Invalid query");
		if($result->num_rows > 0){
			//var_dump($result);
		$data = mysqli_fetch_assoc($result);
		//var_dump($data);
?>
			
			<form action="processupdate.php" method="POST">
			  <div class="mb-3 mt-3">
				<label for="username" class="form-label">username</label>
				<input type="text" class="form-control" id="username" placeholder="username" readonly value="<?=$data['username'];?>" name="username">
			  </div>
			  <div class="mb-3">
				<label for="password" class="form-label">password</label>
				<input type="password" class="form-control" id="password" name="password">
			  </div>
			  <div class="mb-3">
				<label for="password1" class="form-label">Retype password</label>
				<input type="password" class="form-control" id="password1" name="password1">
			  </div>
			<div class="mb-3">
				<label for="firstname" class="form-label">FirstName</label>
				<input type="text" class="form-control" value="<?=$data['firstname'];?>" id="firstname" placeholder="FirstName" name="firstname">
			  </div>
			  <div class="mb-3">
				<label for="lastname" class="form-label">LastName</label>
				<input type="text" class="form-control" value="<?=$data['lastname'];?>" id="lastname" placeholder="LastName" name="lastname">
			  </div>
			  <div class="mb-3">
				<label for="email" class="form-label">email</label>
				<input type="text" class="form-control" value="<?=$data['email'];?>" id="email" placeholder="Email" name="email">
			  </div>
			  
			  <div class="form-check mb-3">
				<label class="form-check-label">
				  <input class="form-check-input" type="checkbox" name="remember"> Remember me
				</label>
			  </div>
			  <input type="hidden" name="id"  value="<?=$data['username'];?>" >
			  
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>

				
<?php
			
		}else
		{
			echo "Ban ghi khong ton tai, hay kiem tra lai";
		}
		
	}
echo "<a href=\"dashboard.php\"> | BACK | </a>";

		
	
?>
</div>
