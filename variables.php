<div style="height:100px;"></div>
<?php

if(isset($_GET['route'])){
	
	$temp=explode('/', $_GET['route']);
	if ($temp[0]=='admin') {
		Core::$SKIN='admin';
		unset($temp[0]);
	}
	$i=0;
	foreach ($temp as $key => $value) {
		if($i==0 && !empty($temp[$key])){
			$_GET['module']=$value;
		}
		if($i==1 && !empty($temp[$key])){
			$_GET['page']=$value;
		}
		$i++;

	}
}
	if(isset($_GET['page'])){
		
		if (!file_exists('controlers/'.Core::$SKIN.'/'.$_GET['module'].'/'.$_GET['page'].'.php')) {
			$_GET['page']=$_GET['module']='404';
		}
	}elseif(isset($_GET['module'])){
		
		if (!file_exists('controlers/'.Core::$SKIN.'/'.$_GET['module'])) {
			$_GET['page']=$_GET['module']='404';
		}else{
			$_GET['page']=$_GET['module'];	
		}
	}else{
		
		$_GET['module']=$_GET['page']='main';
	}
	unset($_GET['route']);



/*function for 	query to BD and create logs when was error */
function query($query){
	global $link;
	$res=mysqli_query($link,$query);
	if($res){
		return $res;
	}else{

		$info= debug_backtrace();
		$err = "Date: ".date("Y-m-d H:i:s")."\r\n".
		"query: ".$query."\r\n".
		"File: ".$info[0]['file']."\r\n"."line: ".$info[0]['line']."\r\n".
		"Error: ".mysqli_error($link)."\r\n\r\n";

		file_put_contents('./logs/mysqli.log',strip_tags($err),FILE_APPEND);
		exit("Something wrong<br>".mysqli_error($link));
	}
}

/*function for trim all elements in array*/
function trim_all($array){
	if(is_array($array)){
		$array=array_map('trim_all', $array);
	}else{
		$array=trim($array);
	}
	return $array;
}

/*function for transform all elements to type (int) in array*/
function int_all($array){
	if(is_array($array)){
		$array=array_map('int_all', $array);
	}else{
		$array=(int)($array);
	}
	return $array;
	}

/*function for transform all elements to type (float) in array*/
function float_all($array){
	if(is_array($array)){
		$array=array_map('float_all', $array);
	}else{
		$array=(float)($array);
	}
	return $array;
}

/*function for */
function e_print_r($array){
	echo '<pre>'.print_r(htmlspecialchars_all($array),1).'</pre>';
}

/* function for correct ... all string from DB */
function htmlspecialchars_all($array){
	if(is_array($array)){
		$array=array_map('htmlspecialchars_all', $array);
	}else{
		$array=htmlspecialchars($array);
	}
	return $array;
}

/* function for write correct data ro BD*/
function mysqli_real_escape_string_all($array){
	global $link;
	if(is_array($array)){
		$array=array_map('mysqli_real_escape_string_all', $array);
	}else{
		$array=mysqli_real_escape_string($link,$array);
	}
	return $array;
}

function myhash($pas){
	$salt = 'ASD';
	$salt2= 'DSA';
	$pas  = crypt(md5($pas.$salt),$salt2);
	return $pas;
}




/*autoload function */
function __autoload($Class){
	include './libs/class_'.$Class.'.php';
}










/*  
if(isset($_GET['module'])){
	switch ($_GET['module']) {
		case 'main':
			$page = array('main','activate');
			if(isset($_GET['page'])){
				if (!in_array($_GET['page'], $page)) {
					$_GET['module']=$_GET['page']='404';
				}
			}else{
				$_GET['page']=$_GET['module'];
			}
			break;
		case '404':
			$page = array('404');
			if(isset($_GET['page'])){
				if (!in_array($_GET['page'], $page)) {
					$_GET['module']=$_GET['page']='404';
				}
			}else{
				$_GET['page']=$_GET['module'];
			}
			break;	
		case 'back':
			$page = array('back');
			if(isset($_GET['page'])){
				if (!in_array($_GET['page'], $page)) {
					$_GET['module']=$_GET['page']='404';
				}
			}else{
				$_GET['page']=$_GET['module'];
			}
			break;	
		case 'news':
			$page = array('news','add','edit');
			if(isset($_GET['page'])){
				if (!in_array($_GET['page'], $page)) {
					$_GET['module']=$_GET['page']='404';
				}
			}else{
				$_GET['page']=$_GET['module'];
			}
			break;
		case 'goods':
			$page = array('goods','add','edit');
			if(isset($_GET['page'])){
				if (!in_array($_GET['page'], $page)) {
					$_GET['module']=$_GET['page']='404';
				}
			}else{
				$_GET['page']=$_GET['module'];
			}
			break;
		case 'cab':
			$page = array('registration','activate','auth','exit');
			if(isset($_GET['page'])){
				if (!in_array($_GET['page'], $page)) {
					$_GET['module']=$_GET['page']='404';
				}
			}else{
				$_GET['page']=$_GET['module'];
			}
			break;

		default:
			$_GET['module']=$_GET['page']='404';
			echo 'error';
			break;
	}
}else{
	$_GET['module']=$_GET['page']='main';
}*/
?>