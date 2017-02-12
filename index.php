<?php

include 'config.php';
include 'variables.php';

session_start();

$link=mysqli_connect(Core::$DB_HOST,Core::$DB_LOGIN,Core::$DB_PASS,Core::$DB_NAME);
mysqli_set_charset($link,'utf8');



include 'controlers/'.$_GET['module'].'/'.$_GET['page'].'.php';

include 'controlers/allpages.php';	

include 'view/default/default.tpl';

?>