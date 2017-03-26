<?php
$array = array(
	'Дата публикации:27 августа 08:43. Был отличный год!',
);

		preg_match_all('#:(.+)\.#ui', $array[0], $matches);
		

?>	