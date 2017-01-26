<?php
	$res=query("SELECT * FROM `goods` WHERE `id` =".int_all($_GET['id'])." LIMIT 1");

	if (!mysqli_num_rows($res)){
		$_SESSION['info'] = 'This good is doesnt exist';
		header('Location: index.php?module=goods&page=goods');
		exit();
	}else{

		$row=mysqli_fetch_assoc($res);
	}

	if (isset($_POST['title'],$_POST['description'],$_POST['category'])) {

		$_POST=trim_all($_POST);

		$row['title']=$_POST['title'];
		$row['description']=$_POST['description'];
		$row['category']=$_POST['category'];

		foreach ($_POST as $key => $value) {
			if(empty($_POST[$key])){
				$error[$key]='This field cannot be empty';
			}
		}

		if (!isset($error)) {
			$_POST=mysqli_real_escape_string_all($_POST);
			query("
				UPDATE `goods` SET
				`title` = '".$_POST['title']."',
				`description` = '".$_POST['description']."',
				`category` = '".$_POST['category']."',
				`date` = NOW()
				WHERE `id`=".int_all($_GET['id'])."
				");
			
			$_SESSION['info'] = 'Goods was saccesfully edited';
			header('Location: index.php?module=goods&page=goods');
			exit();
		}
	}
?>