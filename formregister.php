       
<?php 
 REQUIRE ("header.php");
?>

<html>
<body>
	<div class="container">
		<div class="row">
			<div class="col-6 offset-md-3">
				<form id="form_reg" class="bg-light p-4 my-3" action="action_page.php" method="post">
					<h2 class="py-3 text-center text-uppercase">Register Form</h2>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" name="username" class="form-control" id="username">	
					</div>
					
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control" id="password">	
					</div>
					
					<div class="form-group">
						<label for="firstname">First Name</label>
						<input type="text" name="firstname" class="form-control" id="firstname">	
					</div>
					
					<div class="form-group">
						<label for="lastname">Last Name</label>
						<input type="text" name="lastname" class="form-control" id="lastname">	
					</div>
					
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" class="form-control" id="email">	
					</div>
					
					<input type="submit" class="btn btn-primary btn-block mt-4" name="btn-reg" value="Register">
					<a href="formlogin.php" class="btn btn-primary btn-block mt-4" role="button" aria-pressed="true">Login</a>
					
					<a  href="web.php"   name="home" >HOME</a>
				</form>
			</div>
		</div>
	</div>

<?php 
 REQUIRE ("footer.php");
?>

</body>

</html>

