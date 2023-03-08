<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 11</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
<body>
	<div>
		<?php
			$nasc = isset($_GET["d"])? $_GET["d"]: 1900;
			$idade = date("Y") - $nasc;
			if ($idade > 18) {
				$votar = "já pode votar";
				$dirigir = "já pode dirigir";
			} else {
				$votar = "não pode votar";
				$dirigir = "não pode dirigir";
			}
			echo"Você nasceu em $nasc e tem $idade anos. <br/>";
			echo"Com essa idade você $votar e também $dirigir.";
		?>
		<a href="ex_11.html">Voltar</a>
	</div>
</body>
</html>
