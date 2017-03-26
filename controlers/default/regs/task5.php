<?php
$array = array(
	'10 , 22, 2.1, 2.5, 10.10, 500.1, 77, 10.11.12.13',
);



		$q[]= preg_match_all('#[0-9]+\.[0-9]+#ui', $array[0], $matches[]);
		

?>	