<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>função 8</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$frase = "Eu vou estudar PHP agora";
			$count = str_word_count($frase, 0);
			print($count);
			echo "<br/><br/>";
			$count = str_word_count($frase, 1);
			print_r($count);
			echo "<br/><br/>";
			$count = str_word_count($frase, 2);
			print_r($count);
		?>
	</div>
</body>
</html>
