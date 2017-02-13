<?php
 
Core::$META['title']="Main.php";
Core::$CSS[]='<link rel="stylesheet" href="/new/css/css.css">';



if (isset($_POST['login'],$_POST['password'],$_POST['email'])){
	
	$_POST=trim_all($_POST);
	
	foreach ($_POST as $key => $value) {
		if(empty($_POST[$key])){
			$error[$key]='This field cannot be empty';
		}
	}

	

	if (!isset($error)) {
		if(mb_strlen($_POST['login']) < 3 || mb_strlen($_POST['login']) > 16){
			$error['login'] = 'Login must be between 3 and 16 symbols';
		}
		$res=query("
			SELECT `id` FROM `registration`
			WHERE `login` = '".$_POST['login']."'
			LIMIT 1
		");
		if(mysqli_num_rows($res)){
			$error['login'] = 'Sorry but this login already used';
		}
		$res=query("
			SELECT `id` FROM `registration`
			WHERE `email` = '".$_POST['email']."'
			LIMIT 1
		");
		if(mysqli_num_rows($res)){
			$error['email'] = 'Sorry but this email already used';
		}
	}
	
	
	if(!isset($error)){
		
		query(
			"INSERT INTO `registration` SET
			`login`='".mysqli_real_escape_string_all($_POST['login'])."',
			`password`='".mysqli_real_escape_string_all(myhash($_POST['password']))."',
			`email`='".mysqli_real_escape_string_all($_POST['email'])."',
			`activate_hash` ='".mysqli_real_escape_string_all(myhash($_POST['login'].$_POST['email']))."'
			");
		$_SESSION['regok']='ok';
		$id = mysqli_insert_id($link);
		header("Location: /new/main/activate?id=".$id."&hash=".myhash($_POST['login'].$_POST['email']));
		exit();
	}
}