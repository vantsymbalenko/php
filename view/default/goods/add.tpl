<div class="info" style="height:80px;"></div>
<div class="add_goods1">
	<form action="" method="POST">
		Title:
		<br>
		<input type="text" name="title" value="<?php echo @htmlspecialchars($_POST['title']);?>"><?php echo @$error['title']; ?>
		<br>
		Category:
		<br>

		<select name="category">
			<option></option>
			<option <?php if(isset($_POST['category']) && $_POST['category']=='Cats') echo 'selected="selected"'; ?>>Cats</option>
			<option <?php if(isset($_POST['category']) && $_POST['category']=='Dogs') echo 'selected="selected"'; ?>>Dogs</option> 
		</select><?php echo @$error['category']; ?>
		<br>
		Text:
		<br>
		<textarea rows="10" cols="50" name="description"><?php echo @htmlspecialchars($_POST['description']);?></textarea><?php echo @$error['description']; ?>
		<br>
		<input type="submit" name="add" value="add goods">
	</form>
</div>