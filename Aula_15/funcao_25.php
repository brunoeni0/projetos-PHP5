<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title></title>
	<link rel="stylesheet" href="../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$frase = "Gosto de estudar Matematica";
			$novafrase = str_replace("Matematica", "PHP", $frase);
			echo "$novafrase <br/><br/>";
			$novafrase = str_replace("matematica", "PHP", $frase); // se errar a palavra o programa vai ignorar o comando.
			echo "$novafrase <br/><br/>";
			$novafrase = str_ireplace("matematica", "Programação", $frase); // caso a letra esteja em minuscula vai ignorar e trocar do mesmo jeito.
			echo "$novafrase <br/><br/>";
			$frase = "Gosto de estudar Matematica, Matematica é muito legal";
			$novafrase = str_ireplace("matematica", "Lógica", $frase);
			echo "$novafrase <br/><br/>";
			$frase = "Gosto de estudar Matematica, Matematica é muito bom";
			$novafrase = str_replace("Matematica", "HTML", $frase);
			echo "$novafrase";
		?>
	</div>
</body>
</html>
