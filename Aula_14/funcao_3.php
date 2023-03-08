<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>função 3</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$txt = "Este é um exemplo de string gigante que...";
			$res = wordwrap($txt, 20,"<br>\n", false);
			echo($res);
			
			$t = "Aqui termos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap";
			echo "<br/><br/>";
			// $r = wordwrap($t);
			// $r = wordwrap($t, 20); serve para quebra as linhas no código fonte.
			// $r = wordwrap($t, 10, "<br>"); serve para quebra as linhas na tela do usuário.
			// $r = wordwrap($t, 10, "<br>\n"); serve para quebra as linhas tanto no código quanto para tela do usuário.
			// $r = wordwrap($t, 8, "<br>\n", false); serve para quebra linha caso a palavra for menor que o tamanho pedido.
			$r = wordwrap($t, 20, "<br>\n", true);
			echo $r;
		?>
	</div>
</body>
</html>
