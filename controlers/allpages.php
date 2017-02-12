<?php
	if(isset($_SESSION['user'])){
		$res=query("SELECT * FROM `registration`
			WHERE `id`=".$_SESSION['user']['id']."
			LIMIT 1
			");
		$_SESSION['user']=mysqli_fetch_assoc($res);
		if($_SESSION['user']['access']==0){
			echo "<div style='height:100px;'></div>";
			header("Location: index.php?module=cab&page=exit");
			exit();
		}
	}

	
?>