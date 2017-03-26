<h3>Task7</h3>
<p>Дан массив:
<?php
	e_print_r($array);
?>
<b><i>Задание:</i></b><br>
	1.Проверка на preg_match, разрешить только числам. Подсказка: числа точно так же как и буквы, а именно 0-9 (а-я)<br>
	2.Пропустить только строки, состоящие из цифр 7 и символов ф,я<br>
	3.Пропустить только рус и англ символы, подчеркивание и тире, пробел(!) длиной от 4 до 15 символов.<br>
	4.Выбрать логин, который начинается на M и заканчивается на x , я говорю про Max<br>
<p>
<br>
<b><i>Решение</i></b>
<br>
<b><i>1.</i></b>
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
<br>
<b><i>2.</i></b>
<?php
	foreach ($matches2 as $key => $value) {
		if($q2[$key]){
		echo "В такой-то строке:<b> ".htmlspecialchars($array[$key])."</b> , -регулярка прошла УСПЕШНО";
		e_print_r($matches2[$key]);
	}else{
		echo "В такой-то строке:<b> ".htmlspecialchars($array[$key])."</b> , -регулярка прошла НЕ УСПЕШНО. Совпадений не найдено<br>";
	}
	}
?>
<br>
<b><i>3.</i></b>
<?php
	foreach ($matches3 as $key => $value) {
		if($q3[$key]){
		echo "В такой-то строке:<b> ".htmlspecialchars($array[$key])."</b> , -регулярка прошла УСПЕШНО";
		e_print_r($matches3[$key]);
	}else{
		echo "В такой-то строке:<b> ".htmlspecialchars($array[$key])."</b> , -регулярка прошла НЕ УСПЕШНО. Совпадений не найдено<br>";
	}
	}
?>
<br>
<b><i>4.</i></b>
<?php
	foreach ($matches4 as $key => $value) {
		if($q4[$key]){
		echo "В такой-то строке:<b> ".htmlspecialchars($array[$key])."</b> , -регулярка прошла УСПЕШНО";
		e_print_r($matches4[$key]);
	}else{
		echo "В такой-то строке:<b> ".htmlspecialchars($array[$key])."</b> , -регулярка прошла НЕ УСПЕШНО. Совпадений не найдено<br>";
	}
	}
?>

?>