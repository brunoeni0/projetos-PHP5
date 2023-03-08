<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício_12A</title>
	<link rel="stylesheet" href="../../../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$nasc = isset($_GET["d"])? $_GET["d"] : 1900;
			$idade = date("Y") - $nasc;
			if (($idade >= 16 && $idade < 18) || ($idade >= 65)){
				$sit = "voto opcional.";
			}
			else {
				if ($idade > 16) {
					$sit = "voto obrigatório.";
				}
				else {
					$sit = "não pode votar.";
				}
			}
			echo "Você nasceu em $nasc e tem $idade anos. <br/>";
			echo "Com a sua idade a sua situação é $sit";
		?>
		<a href="ex_12a.html">Voltar</a>
	</div>
</body>
</html>
