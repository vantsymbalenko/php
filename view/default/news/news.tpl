<a href="/new/news/add">Add new news</a>

<?php
if(isset($_SESSION['info'])){
	?>
	<div><?php echo $_SESSION['info'];?></div> 
<?php
	unset($_SESSION['info']);
}
if(mysqli_num_rows($res)){
		echo "<div class='news'>";
?>
	<form action="" method="post">

<?php
		while($row=mysqli_fetch_assoc($res)){
			$row= htmlspecialchars_all($row);
				?>
			<hr>
			<div class="title"><b><?php echo $row['title'];?></b></div>
			<div class="delete"><input type="checkbox" name="ids[]" value="<?php echo htmlspecialchars($row['id']); ?>"><a href="/new/news/news?action=delete&id=<?php echo $row['id'];?>">DELETE</a>  <a href="/new/news/edit?id=<?php echo $row['id'];?>">Edit</a></div>
			<div><?php echo $row['description'];?></div>
			<div class="category"><?php echo $row['category'];?></div>
			<div class="date"><?php echo $row['date'];?></div>
			<hr>
<?php
		}
?>	
	<input type="submit" name="delete" value="DELETE this news">
	</form>
<?php
		echo "</div>";
	}
?>
