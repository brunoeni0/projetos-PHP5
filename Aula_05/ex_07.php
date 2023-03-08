<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="../_css/estilo.css"/>
    <title>Exercício 07</title>
</head>
<body>
<div>
    <?php
		$ano = $_GET["a"];
		$idade = date("Y") - $ano; 
		echo "Quem nasceu em $ano tem $idade anos.<br/>";
		echo "E dessa forma seu voto é ", $idade >= 18 && $idade < 65 ? "OBRIGATÓRIO" : "NÃO OBRIGATÓRIO";
    ?>
</div>
</body>
</html>
