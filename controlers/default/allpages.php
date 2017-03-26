<?php
	if(isset($_SESSION['user'])){
		$re=query("SELECT * FROM `registration`
			WHERE `id`=".$_SESSION['user']['id']."
			LIMIT 1
			");
		$_SESSION['user']=mysqli_fetch_assoc($re);
		if($_SESSION['user']['access']==0){
			echo "<div style='height:100px;'></div>";
			header("Location: /new/cab/exit");
			exit();
		}




	}elseif(isset($_COOKIE['user'])){
		$rem=query("SELECT * FROM `registration` 
			WHERE `id`=".$_COOKIE['user']['id']."
			AND `activate_hash`='".$_COOKIE['user']['activate_hash']."'
			LIMIT 1
			");
		if(mysqli_num_rows($rem)){
			$_SESSION['user']=mysqli_fetch_assoc($rem);
		}else{
			setcookie("user","",time()-3600);
		}
	}

	
?>