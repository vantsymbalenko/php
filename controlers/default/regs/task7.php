<?php
$array = array(
	'inpost',
	'Barabulka_ru',
	'Zimbabwe.ru',
	'Max',
	'Yojik',
	'Иван Тарасов',
	'Ёжик',
	'Борис Николаевич Кощуновский',
	'Ооооооооооооооооооооочень длинное имя',
	'Я',
	'go->drink->die',
	'Don`t sleep',
	'<Пивасик',
	'1',
	'123456789',
	'77777',
	'7ф777я7',
);



foreach ($array as $key => $value) {

		$q[]= preg_match_all('#^[0-9]+$#ui', $value, $matches[$key]);
		$q2[]= preg_match_all('#^[7фя]+$#ui', $value, $matches2[$key]);
		$q3[]= preg_match_all('#^[\sa-zа-я_-]{4,15}$#ui', $value, $matches3[$key]);
		$q4[]= preg_match_all('#^M.*x$#ui', $value, $matches4[$key]);

		


		
	}

	
?>	