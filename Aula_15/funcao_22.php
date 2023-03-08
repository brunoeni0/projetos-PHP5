<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>função 22</title>
	<link rel="stylesheet" href="../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$site = "Curso em video";
			$sub = substr($site, 0, 5);
			echo "$sub <br/><br/>";
			print substr($site, 6); // pega o valor da casa 7 até o final.
			print "<br/><br/>". substr($site, -5); // pega as 5 últimas letras até o final.
			echo "<br/><br/>". substr($site, -5, 2); // pega 2 lestras das 5 últimas letras do texto.
		?>
	</div>
</body>
</html>
