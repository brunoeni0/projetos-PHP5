<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="../_css/estilo.css"/>
    <title>Excercício 06</title>
</head>
<body>
<div>
    <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        echo "Primeira nota: ", number_format($nota1, 2);
        echo "<br/>Segunda nota: ", number_format($nota2, 2);
        $m = ($nota1 + $nota2) / 2;
        echo "<br/>Média do aluno: ", number_format($m, 2);
        echo "<br/>Situação do aluno: ", $m < 6 ? "REPROVADO!" : "APROVADO!";
    ?>
</div>
</body>
</html>