<div style="height:100px;"></div>
<?php
	if (isset($_GET['probe'],$_GET['hash'],$_GET['id'])) {
		query("
			UPDATE `registration` SET
			`active` = 1
			WHERE `activate_hash`='".mysqli_real_escape_string_all($_GET['hash'])."' 
					AND `id`     = ".(int)$_GET['id']."
		");
		header ("Location: index.php");
		exit();
		
	}else{
				echo 'For activate you account please follow link<br>';
?>
	<a href="index.php?module=cab&page=activate&id=<?php echo $_GET['id']; ?>&hash=<?php echo $_GET['hash'];?>&probe=1">Submit</a>

<?php

	}
?>