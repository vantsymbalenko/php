<?php
if (isset($_SESSION['info'])) {
	?>
	<div class="info"><?php echo $_SESSION['info']; ?></div>


<?php
	unset($_SESSION['info']);
}
?>
	<div class="add_goods"><a href="index.php?module=goods&page=add"><div class = "plus">+</div>Add new good</a></div>
	<br>
<?php
if(mysqli_num_rows($res)){
	echo '<div class="goods"><form action="" method="POST">';
		while ($row=mysqli_fetch_assoc($res)) {
		$row=htmlspecialchars_all($row);
		?>
			<div class="good">
				<div class="checkbox">
					<input type="checkbox" name="checkbox[]" value="<?php echo htmlspecialchars($row['id']); ?>">
					<a href="index.php?module=goods&page=edit&id=<?php echo $row['id']; ?>">Edit</a>
					<a href="index.php?module=goods&page=goods&action=delete&id=<?php echo (int)$row['id']; ?>">DELETE</a>
				</div>
				<div class="edit_delete"></div>
				<div class="title"><?php echo $row['title']; ?></div>
				<div class="cat">Category: <?php echo $row['category']; ?></div>
				<div class="desc"><?php echo $row['description']; ?></div>
				<div class="date_goods">Date of last edit: <?php echo $row['date']; ?></div>
			</div>
			<br>
<?php	
		}
?>	
	<input type="submit" name="delete" value="Delete this goods">
	</form></div>
<?php
	}
?>






