<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title></title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
	<style> 
		span.grande {
			font-size: 18pt;
		}
	</style>
</head>
<body>
	<div>
		<?php
			$v = isset($_GET["n"])? $_GET["n"]: 0;
			$count = 0;
			print "<p><span class='grande'>Analisando o número $v ...</span></p>";
			echo "Valores multiplos: ";
			for ($c = 1; $c <= $v; $c++) {
				if ($v % $c == 0) {
					$count++;
					echo "$c ";
				}
			}
			echo "<p>Total de múltiplos: $count </p>";
			echo "Resultado: $v ";
			if ($count <= 2) {
				echo "<span class='foco'>É PRIMO!</span>";
			} else {
				echo "<span class='foco'>NÃO PRIMO!</span>";
			}
		?>
		<a href="javascript:history.go(-1)" class="botao">Voltar</a>
	</div>
</body>
</html>
