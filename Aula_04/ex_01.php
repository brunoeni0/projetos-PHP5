<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css"/>
    <title>Exercício 01</title>
</head>
<body>
<div>
    <?php
		$n = $_GET["p"]; // server para receber valor no nevegador usando ? e o nome da variavel p = algo
		echo "O preço do produto é R$ ". number_format($n, 2, ",", "."). " reais.<br>";
		$novo = $n - $n * 10 / 100;
		echo "E pagando à vista com 10% de desconto fica em R$ ". number_format($novo, 2 , ",", "."). " reais.<br/><br/>";
		$novo = $n + $n * 10 / 100;
		echo "E começando à pagar com 30 dias de prazo, com 10% de juros fica em ". number_format($novo, 2, ",", "."). "  reais.";
    ?>
</div>
</body>
</html>
