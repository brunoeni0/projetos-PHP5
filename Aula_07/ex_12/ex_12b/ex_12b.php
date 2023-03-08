<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 12B</title>
	<link rel="stylesheet" href="../../../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$nasc = isset($_GET["d"])? $_GET["d"] : 1900;
			$idade = date("Y") - $nasc;
			if ($idade < 16) {
				$sit = "não pode votar";
			} elseif ($idade < 18 or $idade >= 65) {
				$sit = "voto opcional";
			} else {
				$sit = "voto obrigatório";
			}
			echo "Você nasceu em $nasc é tem $idade anos. <br/>";
			echo "Com essa idade a sua situação é $sit.";
		?>
		<a href="ex_12b.html">Voltar</a>
	</div>
</body>
</html>
