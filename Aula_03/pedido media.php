<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Aula 03</title>
	<link rel="stylesheet" href="../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			/*
			para colocar valores precisa colocar no final da url do navegador ? e o nome das variaveis dentro do get que serve para receber os valores caso queira colocar mais de uma variavel coloque & para poder adicionar o valor exemplo:
			http://127.0.0.1/Aula_03/pedido%20media.php?a=5&b=3
			OU
			http://localhost/Aula_03/pedido%20media.php?b=8&a=4
			*/
			//assim as variaveis a e b vão receber os valores e mandar para o get dentro do $n1 e do $n2
			
			$n1 = $_GET["a"];
			$n2 = $_GET["b"];
			$m = ($n1 + $n2) / 2;
			echo ("A média de $n1 e $n2 é $m");
		?>
	</div>
</body>
</html>
 