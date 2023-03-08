<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>função 11</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$vetor[0] = "Curso";
			$vetor[1] = "em";
			$vetor[2] = "Vídeo";
			$texto = implode("#", $vetor);
			print($texto);
			echo"<br/><br/>";
			$v[0] = "Programando";
			$v[1] = "em";
			$v[2] = "PHP";
			$t = join(" ", $v);
			print($t)
		?>
	</div>
</body>
</html>
