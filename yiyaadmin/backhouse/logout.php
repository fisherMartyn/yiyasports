<?php
	session_start();
	unset($_SESSION['name']);
	session_destroy();
	setcookie ("name", "", time() - 3600,"/");
?>
