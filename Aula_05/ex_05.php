<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="../_css/estilo.css"/>
    <title>Exercício 05</title>
</head>
<body>
<div>
    <?php
		$n1 = $_GET["x"];
		$n2 = $_GET["y"];
		$esc = $_GET["op"];
		echo "Os valores passados foram $n1 e $n2<br/>";
		echo "O resultado será: ", $esc == "s"? $n1 + $n2 : $n1 * $n2;
    ?>
</div>
</body>
</html>
