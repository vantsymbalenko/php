<?php
$res=query("SELECT * FROM `comments` ORDER BY `date` desc");

if (isset($_POST['message'],$_POST['name'],$_POST['email'])){
	
	$_POST=trim_all($_POST);
	
	foreach ($_POST as $key => $value) {
		if(empty($_POST[$key])){
			$error[$key]='This field is empty';
		}
	}
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		$error['email']='This field is incorrect';
	}
	
	
	if(!isset($error)){
		$_POST=mysqli_real_escape_string_all($_POST);
		query(
			"INSERT INTO `comments` SET
			`date`='".date("Y-m-d H:i:s")."',
			`email` = '".$_POST['email']."',
			`name` = '".$_POST['name']."',
			`comment`='".$_POST['message']."'"
			);	
		$_SESSION['comment_ok']='ok';
		header('Location: index.php?module=back');
		exit();
	}
}
?>