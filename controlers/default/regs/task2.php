<?php
$array = array(
    'main',
    'READ',
    'news"&\\/files',
	'../../index',
	'news',
	'kill_crash-and-destroy',
	'loveYou',
);


	foreach ($array as $key => $value) {
		$q[$key]= preg_match_all('#^([a-z-_]*)$#ui', $value, $matches[$key]);
		
	}
?>	