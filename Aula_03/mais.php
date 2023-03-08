<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../_css/estilo.css">
    <meta charset="UTF-8">
    <title>Aula 03</title>
</head>
<body>
<div>
    <?php
        $n1 = 5;
        $n2 = 4;
        $s = $n1 + $n2;
        echo "A soma de $n1 + $n2 = $s";
		echo "<br>A soma de $n1 + $n1 = ". ($n1+$n1);
		echo '<br>A soma de $n2 + $n2 = '. ($n2 + $n2);
		echo '<br>A soma de '.$n2.' + '.$n2.' = '. ($n2 + $n2);
		echo "<br>A soma de ". $n1. " + ". $n1. " = ". ($n1 + $n1);
    ?>
</div>
</body>
</html>