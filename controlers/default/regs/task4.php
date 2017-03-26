<?php
$array = array(
	'Длинная строка. Главное, что мы научимся с ней идеально работать.  HOW do you do? Вот так и живём.Классно!',
);


	
		$q[]=preg_match_all('#[a-zа-яё]+#ui', $array[0], $matches[]);
		$q2[]=preg_match_all('#[a-z]+#ui', $array[0], $matches2[]);
		$q3[]=preg_match_all('#\.\s*?([a-zа-яё]+)#ui', $array[0], $matches3[]);
		$q4[]=preg_match_all('#^.{4}(.)#ui', $array[0], $matches4[]);
		$q5[]=preg_match_all('#[A-ZА-Я][a-zа-яA-ZА-Я]*#u', $array[0], $matches5[]);
	
?>	