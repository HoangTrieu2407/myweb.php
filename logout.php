<?php
	session_start();
	ob_start();
	
	unset($_SESSION['login_user']);
	
	header('Location:web.php');

?>