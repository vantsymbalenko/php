<?php



if(mysqli_num_rows($res)){
	echo '<div class="all_feedback">';
	if(isset($_SESSION['comment_ok'])){
	unset($_SESSION['comment_ok']);

?>	
	<div class="comment_ok">Comment was left</div>

<?php
	}
	while($row=mysqli_fetch_assoc($res)){
	$row=htmlspecialchars_all($row);
	?>
	<div class="view_feedback">
		<div class="name"><?php echo $row['name'];?></div>
		<div class="date"><?php echo $row['date'];?></div>
		<div class="message"><?php echo nl2br($row['comment']);?></div>

	</div>
		
	

<?php
		}
	
}
?>

<div class="feedback">
	<form action="" method="POST">
		<div class="else">
			Enter name:<input type="text" name="name" value="<?php echo @htmlspecialchars($_POST['name']);?>"> <?php echo @$error['name']; ?>
		</div>
		<div class="else">
			Enter email:<input type="email" name="email" value="<?php echo @htmlspecialchars($_POST['email']);?>"> <?php echo @$error['email']; ?>
		</div>
		<div class="else">
		Message:
		<br>
			<textarea cols="100" rows="10" name="message"><?php echo @htmlspecialchars($_POST['message']);?></textarea>
			<?php echo @$error['message']; ?>
		</div>
		<div class="send">
			<input type="submit" name="submit" value="Send" >
		</div>

	</form>
</div>
</div>