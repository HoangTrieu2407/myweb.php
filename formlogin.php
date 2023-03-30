
<?php
require("header.php");
require("connection.php");
?>
<html>
<body>

<style>
	

</style>

<form style="width:600px" method="post" action="login.php" class="border border-success border-2 rounded m-auto p-2">
	
  
<div class="mb-3 mt-3">
    <label for="username" class="form-label">UserName:</label>
    <input type="username" class="form-control" id="username" placeholder="UserName" name="username">
 </div>

  <div class="mb-3">
    <label for="password" class="form-label">Password:</label>
    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
  </div> 
  <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me</label>
  </div>
  <div  class="button">
  <input  type="submit"  name="submit" class="btn btn-primary btn-block mt-4" value="Login">
   <a href="formregister.php" class="btn btn-primary btn-block mt-4" role="button" aria-pressed="true">Register</a>
   </div>
  
  <a  href="dashboard.php"   name="edit" >EDIT</a>
  <a  href="web.php"   name="home" >HOME</a>
  
</form>
</body>
</html>


			