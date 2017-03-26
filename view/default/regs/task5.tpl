<h3>Task5</h3>
<p>Дан массив:
<?php
	e_print_r($array);
?>
<b><i>Задание:</i></b>
Достать ВСЕ дробные числа. Дробные - это числа, разделенные точкой
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