<?php
echo '404.php<br>';/*
$res=query("SELECT * FROM `comments` ORDER BY `id`");
if(mysqli_num_rows($res)){
	while($row=mysqli_fetch_assoc($res)){
		echo 'id='.$row['id'].' name= '.$row['name'].' message='.$row['comment'].'<br>';
	}
}
$_SESSION['page']='all is allright';

$res=query("SELECT * FROM `registration`");
var_dump(mysqli_fetch_assoc($res));



$_GET['module']='back';
$_GET['page']='back';

switch ($_GET['module']) {
	case 'main':
		$page = array('main');
		if (!in_array($_GET['page'], $page)) {
			$_GET['module']=$_GET['page']='404';
		}else{
			echo 'main';
		}
		break;
	case '404':
		$page = array('404');
		if (!in_array($_GET['page'], $page)) {
			$_GET['module']=$_GET['page']='404';
		}else{
			echo '404';
		}
		break;	
	case 'back':
		$page = array('back');
		if (!in_array($_GET['page'], $page)) {
			$_GET['module']=$_GET['page']='404';
		}else{
			echo 'back';
		}
		break;	
	default:
		$_GET['module']=$_GET['page']='404';
		echo 'error';
		break;
}

$a = '                     6 ';
$arrayName = array(
	'   1   ', 
	'2    ', 
	$arr = array(
		'  3 text 3    ',
		'   42     ')
	);

$a=int_all($a);


e_print_r($a);

*/

 $res=query("SELECT * FROM `comments` ORDER BY `id`");
// if(mysqli_num_rows($res)){
// 	while($row=mysqli_fetch_assoc($res)){
// 		$row=htmlspecialchars_all($row);
// 		echo 'id='.$row['id'].' name= '.$row['name'].' message='.$row['comment'].'<br>';
// 	}
// }

/**
* 
*/
// class Class1 
// {
// 	private $variable1=10;
// 	private $variable2=2;
	
// 	public function some()
// 	{	
// 		$this->variable2=12;
// 		return $this->variable2;
// 	}
// }
// $someClass = new Class1;

// mail('IvanZymbalenko1@gmail.com', 'subject', 'message');
class Test
{
    public $x = 1;
}
// $t1 = new Test;
// $t2 = new Test(2);
// $t1->x = 3;
// $t2->x2 = 3;
// echo ($t1->x + $t2->x);
$hash= crypt('some');
echo '<br>';
echo md5('some');
?>