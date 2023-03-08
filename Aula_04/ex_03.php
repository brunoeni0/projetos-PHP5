<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="../_css/estilo.css"/>
    <title>Exercício 03</title>
</head>
<body>
<div>
    <?php
		$x = $_GET["a"];
		$y = $x;
		$y += $_GET["b"];
		echo "A váriavel X vale: $x e a váriavel Y vale: $y <br/>";
		$x = $_GET["a"];
		$y = &$x; // serve para vincular uma variável a outra.
		$y += $_GET["b"];
		echo "A váriavel X vale: $x e a váriavel Y vale: $y";
    ?>
</div>
</body>
</html>
