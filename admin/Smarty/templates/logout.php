<?php
	//session_close();
        session_start();
	unset($_SESSION['name']);
	session_destroy();
        
        echo "<script>alert(\"登出成功\");location='../../index.php';</script>";
?>
