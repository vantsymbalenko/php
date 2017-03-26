<h3>Task4</h3>
<p>Дан массив:
<?php
	e_print_r($array);
?>
<b><i>Задание:</i></b><br>
	1.Получить все слова. Самая простая регулярка, поиск по всей строке, указать надо лишь допустимые символы и количество.<br>
	2.Получить все английские слова.<br>
	3.Получить слова, которые стоят после точки. Обращаю внимание, что пробел после точки может БЫТЬ и даже не один, а может и не быть, символ пробела: \s.<br>
	4.Необходимо получить 5 символ от начала строки. Начало строки: ^ , и не забудем использовать кармашек, чтобы туда ушел нужный нам символ.<br>
	5.Получить все слова, в которых первым символ будет начинаться с большой буквы. Подсказка, необходимо использовать 2 квадратных скобки!.<br>
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
<br>
<b><i>5.</i></b>
<?php
	foreach ($matches5 as $key => $value) {
		if($q5[$key]){
		echo "В такой-то строке:<b> ".htmlspecialchars($array[$key])."</b> , -регулярка прошла УСПЕШНО";
		e_print_r($matches5[$key]);
	}else{
		echo "В такой-то строке:<b> ".htmlspecialchars($array[$key])."</b> , -регулярка прошла НЕ УСПЕШНО. Совпадений не найдено<br>";
	}
	}
?>