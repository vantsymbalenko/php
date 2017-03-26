<?php
	if(isset($_COOKIE['user'])){
		setcookie("user[id]","",time()-3600);
		setcookie("user[activate_hash]","",time()-3600);
	}
	if(isset($_SESSION['user'])){
		session_unset();
		session_destroy();
		header("Location: /new");
		exit();
	}
?>