<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="../_css/estilo.css"/>
    <title>Exercício 02</title>
</head>
<body>
<div>
    <?php
    /* esse exercício pretende demonstrar o uso de operadores de incremento e decremento */
    $a = $_GET["aa"]; // essa linha vai pegar o ano na URL
    echo "O ano atual é $a e o ano anterior foi ", --$a;
    ?>
</div>
</body>
</html>
