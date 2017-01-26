<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_GET['page'];?></title>
	<link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>
<br>
<a href="index.php?module=404&page=404">404</a>
<a href="index.php?module=main&page=main">main</a>
<a href="index.php?module=back&page=back">back</a>
<a href="index.php?module=news&page=news">news</a>
<a href="index.php?module=goods&page=goods">goods</a>
<br>
<?php
	include 'view/'.$_GET['module'].'/'.$_GET['page'].'.tpl';
?>
</body>
</html>