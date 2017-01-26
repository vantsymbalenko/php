<?php
/*  add new news */
if (isset($_POST['submit'],$_POST['title'],$_POST['text'],$_POST['category'],$_POST['description'])) {

	$_POST=trim_all($_POST);

	foreach ($_POST as $key => $value) {
		if(empty($_POST[$key])){
			$error[$key]='This field is empty';
		}
	}
	
	if(!isset($error)){
		$_POST=mysqli_real_escape_string_all($_POST);
	query("
		INSERT INTO `news` SET
		`title`       = '".$_POST['title']."',
		`description` = '".$_POST['description']."',
		`text`        = '".$_POST['text']."',
		`category`    = '".$_POST['category']."',
		`date`=NOW()
		");
	$_SESSION['info']='news was successfully added';
	header("Location: index.php?module=news&page=news");
	exit();
	}
}