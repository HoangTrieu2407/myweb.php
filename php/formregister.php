       
<?php
require("header.php");
?>
<form action="/action_page.php">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
  </div>
  <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
    </label>
  </div>
  
        <div class="form-group">
        Lý do bạn đến với chúng tôi
        <br>
        <br>
        <input type="radio" name="Chia sẻ kinh nghiệm "> Chia sẻ kinh nghiệm
        <br>
        <br>
        <input type="radio" name="Tham Khảo" > Tham Khảo
    </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
echo "<a href=\"web.php\"> | BACK | </a>";

?>