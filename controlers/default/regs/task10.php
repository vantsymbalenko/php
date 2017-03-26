<?php
$array = array(
	'<a href="file.php">Это ссылка, и тут было классно</a>',
	'<a    href     =       "file.php"     >Это ссылка, и тут было классно</a>',
	'<a    href=file.php >Это ссылка, и тут было классно</a>',
	"<a    href='file.php' >Это ссылка, и тут было классно</a>",
);




foreach ($array as $key => $value) {

		$q[]= preg_match_all('#=\s*(\"|\')?([a-z\.]+)(\"|\')?#ui', $value, $matches[$key]);
		

		


		
	}

	
?>	