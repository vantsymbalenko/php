<?php
	$res=query("SELECT * FROM `goods` ORDER BY `date` DESC");


	if (isset($_GET['id'],$_GET['action']) && $_GET['action']=='delete') {

		query("DELETE FROM `goods` WHERE `id` = '".int_all($_GET['id'])."'");

		$_SESSION['info'] = 'goods was delete';
		header("Location: index.php?module=goods&page=goods");
		exit();
	}


	if (isset($_POST['delete'],$_POST['checkbox'])) {
		
		$_POST['checkbox'] = int_all($_POST['checkbox']);

	$ids=implode(',', $_POST['checkbox']);

	query("DELETE FROM `goods` WHERE `id` IN (".$ids.")");

	$_SESSION['info'] = 'Goods was saccesfully deleted';
	header('Location: index.php?module=goods&page=goods');
	exit();
	}
?>