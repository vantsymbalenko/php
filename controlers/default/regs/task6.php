<?php
$array = array(
	'site.ru',
	'barakuda',
	'zimbabwe_ru',
	'zimbabwe',
	'zzz-zimbabwe',
	'http://site.ru',
	'www.site.com',
	'www.zimbabwe.com',
	'zimbabwe.com.ua',
	'http://zimbabwe.ru',
	'htpp://zimbabwe.ru',
);




foreach ($array as $key => $value) {

		$q[]= preg_match_all('#^(http://|www\.)?zimbabwe\.[a-z0-9]+#ui', $value, $matches[$key]);

		preg_match('#^http://#ui', $value, $matches2[$key]);

		preg_match('#\.[a-z0-9]+$#ui', $value, $matches3[$key]);


		if(!isset($matches2[$key][0])){
			
			$array2[$key]=preg_replace('#^.+#u','http://'.$value, $value);
		}else{
			$array2[$key]=$value;
		}


		if(!isset($matches3[$key][0])){
			$array3[$key]=$value.'.ru';	
		}else{
			$array3[$key]=$value;
		}


		
	}

	
?>	