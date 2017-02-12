<?php
if(isset($_SESSION['user'])){
	header("Location: index.php?module=404&page=404");
}
if (isset($_POST['login'],$_POST['pass'])) {
	$res=query("SELECT * FROM `registration`
		WHERE `login`='".mysqli_real_escape_string_all($_POST['login'])."'
		AND `password`='".mysqli_real_escape_string_all(myhash($_POST['pass']))."'
		");
	if(mysqli_num_rows($res)){
		$_SESSION['user']=mysqli_fetch_assoc($res);
		header("Location: index.php");
		exit();

	}else{
		$error="Invalid login or password";
	}
}