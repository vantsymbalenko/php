<?php
	if (isset($_POST['title'],$_POST['description'],$_POST['category'])) {
		
		$_POST=trim_all($_POST);

		foreach ($_POST as $key => $value) {
			if(empty($_POST[$key])){
				$error[$key]='This field is empty';
			}
		}
		
		if (!isset($error)) {
			$_POST=mysqli_real_escape_string_all($_POST);
			query("
				INSERT INTO `goods` SET
				`title` = '".$_POST['title']."',
				`description` = '".$_POST['description']."',
				`category` = '".$_POST['category']."',
				`date` = NOW()
				");

			$_SESSION['info'] = 'Goods was saccesfully added';
			header('Location: index.php?module=goods&page=goods');
			exit();
		}
	}
?>	