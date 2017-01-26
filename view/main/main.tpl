<?php if(!isset($_SESSION['regok'])){
?>
<form 	method="POST" action="">
<table>
	<tr>
	<td>Enter you logi</td>
	<td><input type="text" name="login" value="<?php echo @htmlspecialchars($_POST['login']);?>"></td>
	<td class="error"><?php echo @$error['login'];?></td>
	</tr>
	<tr>
	<td>Enter you password</td>
	<td><input type="password" name="password" value="<?php echo @htmlspecialchars($_POST['password']);;?>"></td>
	<td class="error"><?php echo @$error['password'];?></td>
	</tr>
	<tr>
	<td>Enter you email</td>
	<td><input type="email" name="email" value="<?php echo @htmlspecialchars($_POST['email']);;?>"></td>
	<td class="error"><?php echo @$error['email'];?></td>
	</tr>
	<tr>
	<td rowspan="3"><input type="submit" value="Send"></td>
	</tr>
</table>
</form>
<?php 
}else{
	unset($_SESSION['regok']);
	echo "All is allright :)";
}
?>