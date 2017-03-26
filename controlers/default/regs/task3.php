<?php
$array = array(
	'file.jpg',
	'zzz.png',
	'afafaf.php',
	'quad.jpg.',
	'quad2.JPG',
	'quad3.jpg.vir',
	'gif.doc',
	'file.virus',
	'file.ppp'
);


	foreach ($array as $key => $value) {
		$q[$key]= preg_match_all('#(jpg|gif|png)$#ui', $value, $matches[$key]);
		
	}
?>	