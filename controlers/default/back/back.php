<?php
Core::$CSS[]='<link rel="stylesheet" href="/new/css/css.css">';

$res=query("SELECT * FROM `comments` ORDER BY `date` desc");

if (isset($_POST['message'])){
	
	$_POST=trim_all($_POST);
	
	foreach ($_POST as $key => $value) {
		if(empty($_POST[$key])){
			$error[$key]='This field is empty';
		}
	}
	
	
	
	if(!isset($error)){
		$_POST=mysqli_real_escape_string_all($_POST);
		query(
			"INSERT INTO `comments` SET
			`date`='".date("Y-m-d H:i:s")."',
			`email` = '".$_SESSION['user']['email']."',
			`name` = '".$_SESSION['user']['login']."',
			`comment`='".$_POST['message']."'"
			);	
		$_SESSION['comment_ok']='ok';
		header('Location: /new/back');
		exit();
	}
}
?>