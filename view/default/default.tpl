<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $_GET['page'];?></title>
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">

</head>
<body>
<div class="container">
	<div class="row">
		
		<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
		<div class="header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="index.php?module=main&page=main" class="navbar-brand">Logo for my site</a>
		</div>
		<div class="collapse navbar-collapse" id="menu">
			<ul class="nav navbar-nav">
				<li><a href="index.php?module=404&page=404">404</a></li>
				<li><a href="index.php?module=main&page=main">Main</a></li>
				<li><a href="index.php?module=back&page=back">Feedback</a></li>
				<li class="dropdown">
				<a href="" class="dropdown-toggle" data-toggle="dropdown">News <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="index.php?module=news&page=news">News</a></li>
						<li><a href="index.php?module=goods&page=goods">Goods</a></li>
					</ul>
				</li>
				<?php if(!isset($_SESSION['user'])){
				?>
				<li><a href="index.php?module=cab&page=registration">Registration</a></li>
				<li><a href="index.php?module=cab&page=auth">Authorization</a></li>
				<?php }else{ ?>
				<li><a href="index.php?module=cab&page=exit">Exit</a></li>
				<?php
				}
				?>
				
			</ul>
		</div>

			

		</div>
		</div>
	</div>
</div>

<!--<br>
<a href="index.php?module=404&page=404">404</a>
<a href="index.php?module=main&page=main">main</a>
<a href="index.php?module=back&page=back">back</a>
<a href="index.php?module=news&page=news">news</a>
<a href="index.php?module=goods&page=goods">goods</a>
<br>-->
<?php
	include 'view/'.$_GET['module'].'/'.$_GET['page'].'.tpl';
?>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
</body>
</html>