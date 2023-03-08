<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 14</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$valor = isset($_GET["n"])? $_GET["n"]: 0;
			$op = isset($_GET["v"])? $_GET["v"]: 0;
			switch($op){
				case 1:
					echo "O dobro de <span class='foco'>$valor</span> é <span class='foco'>", $valor + $valor, "</span>"; // $valor * 2
					break;
				case 2:
					echo "O cubo de <span class='foco'>$valor</span> é <span class='foco'>", pow($valor, 3), "</span>"; // $valor ^ 3
					break;
				case 3:
					echo "A raiz de <span class='foco'>$valor</span> é <span class='foco'>". sqrt($valor), "</span>"; // $valor ^ (1/2) ou $valor ^ 0.5
					break;
				default:
					echo ("Erro valor dígitado inválido!");
			}
		?>
		<a href="ex_014.html" class="botao">voltar</a>
	</div>
</body>
</html>
