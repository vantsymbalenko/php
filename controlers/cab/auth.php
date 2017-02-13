<?php


if(isset($_SESSION['user'])){
	header("Location: /new/404/404");
}
if (isset($_POST['login'],$_POST['pass'])) {
	
	$res=query("SELECT * FROM `registration`
		WHERE `login`='".mysqli_real_escape_string_all($_POST['login'])."'
		AND `password`='".mysqli_real_escape_string_all(myhash($_POST['pass']))."'
		AND `active`=1
		LIMIT 1
		");
	if(mysqli_num_rows($res)){
		$_SESSION['user']=mysqli_fetch_assoc($res);



		if (isset($_POST['rem'])) {
			$hash=myhash($_SESSION['user']['login'].$_SESSION['user']['password']);
			query("UPDATE `registration` SET 
				`activate_hash`='".$hash."'
				WHERE `id`=".$_SESSION['user']['id']."
				AND `password`='".mysqli_real_escape_string_all($_SESSION['user']['password'])."'
				LIMIT 1
				");
			setcookie('user[id]',$_SESSION['user']['id'],time()+3600);
			setcookie("user[activate_hash]",$hash,time()+3600);

		}




		header("Location: /new");
		exit();

	}else{
		$error="Invalid login or password";
	}
}