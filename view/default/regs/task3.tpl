<h3>Task3</h3>
<p>Дан массив:
<?php
	e_print_r($array);
?>
<b><i>Задание:</i></b>
Загрузка фотографий. Необходимо допустить ТОЛЬКО: jpg,png,gif расширения
	  Важной особенностью будет то, что поиск лучше осуществлять с конца строки $ .
	  Интересный момент, что можно попасться на ошибку Попова :)
<p>
<br>
<b><i>Решение</i></b>
<br>

<?php
	foreach ($matches as $key => $value) {
		if($q[$key]){
		echo "В такой-то строке:<b> ".htmlspecialchars($array[$key])."</b> , -регулярка прошла УСПЕШНО";
		e_print_r($matches[$key]);
	}else{
		echo "В такой-то строке:<b> ".htmlspecialchars($array[$key])."</b> , -регулярка прошла НЕ УСПЕШНО. Совпадений не найдено<br>";
	}
	}
?>