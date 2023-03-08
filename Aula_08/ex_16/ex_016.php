<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 16</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$regiao = isset($_GET["e"])? $_GET["e"]: 0;
			switch ($regiao) {
				case 1:
					$r = "Norte";
					break;
				case 2:
					$r = "Nordeste";
					break;
				case 3:
					$r = "Centro-Oeste";
					break;
				case 4:
					$r = "Sudeste";
					break;
				case 5:
					$r = "Sul";
				default:
					echo "Erro, região não encontrada!";
			}
			if ($regiao <> 0) {
				echo "Você é da <span class='foco'>Região $r </span>";
			}
		?>
		<a href="javascript:history.go(-1)" class="botao">Voltar</a>
	</div>
</body>
</html>
