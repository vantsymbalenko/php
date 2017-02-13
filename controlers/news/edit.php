<?php
	/*SELECT FROM DB news with id */
	$res = query("SELECT * FROM `news` WHERE `id` =".int_all($_GET['id'])." LIMIT 1");
	
	if(!mysqli_num_rows($res)){
		$_SESSION['info']='news with this "id" is doesn\'t exist';
		header("Location: /new/news/news");
		exit();
	}else{
		$row = mysqli_fetch_assoc($res);	
	}

	/* Edit news*/
if(isset($_POST['edit'],$_POST['title'],$_POST['text'],$_POST['description'],$_POST['category'])){

	$_POST=trim_all($_POST);

	$row['title']=$_POST['title'];
	$row['text']=$_POST['text'];
	$row['description']=$_POST['description'];
	$row['category']=$_POST['category'];

	foreach ($_POST as $key => $value) {
		if(empty($_POST[$key])){
			$error[$key]='This field is empty';
		}
	}

	
	if (!isset($error)) {
		$_POST=mysqli_real_escape_string_all($_POST);
		query("
		UPDATE `news` SET
		`title`       = '".$_POST['title']."',
		`description` = '".$_POST['description']."',
		`text`        = '".$_POST['text']."',
		`category`    = '".$_POST['category']."',
		`date`=NOW()
		WHERE `id`=".(int)$_GET['id']."
		");
	$_SESSION['info']='news was successfully edited';
	header("Location: /new/news/news");
	exit();
	}
}
?>