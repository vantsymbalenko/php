<h3>Task2</h3>
<p>Дан массив:
<?php
	e_print_r($array);
?>
<b><i>Задание:</i></b>
Проверить допустимые имена файлов
      Важно заметить, что мы в юникс-системе будем использовать как большие, так и маленькие символы.
	  Необходимо недопустить попадания ТОЛЬКО запрещенных файловой системой имён, а так же попытки перейти между каталогами
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