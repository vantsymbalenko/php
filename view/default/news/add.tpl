<form action="" method="POST">
	<div>
	Title:
	<br>
	<input type="text" name="title" value="<?php echo @htmlspecialchars($_POST['title']);?>"><?php echo @$error['title']; ?>
	</div>
	<div>
	Category:
	<br>
	<input type="text" name="category"  value="<?php echo @htmlspecialchars($_POST['category']);?>"><?php echo @$error['category']; ?>
	</div>
	<div>
	Short description:
	<br>
	<textarea name="description" rows="10" cols="50"><?php echo @htmlspecialchars($_POST['description']);?></textarea><?php echo @$error['description']; ?>
	</div>
	<div>
	Full description:
	<br>
	<textarea name="text"  rows="10" cols="50"><?php echo @htmlspecialchars($_POST['text']);?></textarea><?php echo @$error['text']; ?>
	</div>
	<input type="submit" name="submit" value="Add news">
</form>