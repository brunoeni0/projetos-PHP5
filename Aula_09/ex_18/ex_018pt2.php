<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 17</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$c= 1;
			while ($c <= 5) {
				$v = "n$c";
				$$v = isset($_GET["n$c"])? $_GET["n$c"]: 0;
				echo "valor $c: ". $$v ."<br/>";
				$c++;	
			}
		?>
		<br/> <a href="javascript:history.go(-1)" class="botao">Voltar</a>
	</div>
</body>
<html>
