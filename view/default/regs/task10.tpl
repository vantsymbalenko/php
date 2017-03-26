<h3>Task10</h3>
<p>Дан массив:
<?php
	e_print_r($array);
?>
<b><i>Задание:</i></b><br>
	Используем карманы, необходимо получить путь, куда ссылается и текст внутри тега!<br>
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