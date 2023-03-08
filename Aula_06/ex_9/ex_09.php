<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício_09</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$nome = isset($_GET["n"])? $_GET["n"] : "[Não informado!]"; #O isset serve para ver se $_GET["n"] está configurado corretamente.
			$nasc = isset($_GET["d"])? $_GET["d"] : 0;
			$sexo = isset($_GET["sexo"])? $_GET["sexo"] : "[Não informado!]";
			$idade = date("Y") - $nasc;
			echo"$nome é do sexo $sexo e tem $idade anos.";
		?>
		 <a href="ex_09.html">Voltar</a>
	</div>
</body>
</html>
