<?php
	if(isset($_SESSION['user'])){
		session_unset();
		session_destroy();
		
	}
?>