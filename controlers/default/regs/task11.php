<?php
$array = array(
	'text@',
	'yandex@@mega.com',
	'beer@mail.com',
	"inpost.dp.ua",
	"inpostdpua@gmail.com",
);





foreach ($array as $key => $value) {

		$q[]= preg_match_all('#([a-z_-]+@[a-z]+\.[a-z]+)#ui', $value, $matches[$key]);
		

		


		
	}

	
?>	