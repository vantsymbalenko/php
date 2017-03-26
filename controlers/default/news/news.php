<?php
	Core::$CSS[]='<link rel="stylesheet" href="/new/css/css.css">';
 /* this part of code detele several news */

	if (isset($_POST['ids'],$_POST['delete'])) {

		$_POST['ids']=int_all($_POST['ids']);
		
		$ids=implode(',', $_POST['ids']);

		query("DELETE FROM `news` WHERE `id` IN (".$ids.")");

		$_SESSION['info']='NEWS was succesfully delete';
		header("Location: /new/news/news");
		exit();
	}
	
	/* this part of code select all news from DB `reg` table `news` */

	$res=query("SELECT * FROM `news` ORDER BY `date` DESC");

	/* this part of code delete only one news */
	
	if(isset($_GET['action']) && $_GET['action']=='delete'){

		query("DELETE FROM `news` WHERE `id`='".(int)$_GET['id']."'");

		$_SESSION['info']='NEWS was succesfully delete';
		header("Location: /new/news/news");
		exit();
	}

?>