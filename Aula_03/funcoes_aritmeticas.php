<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="../_css/estilo.css"/>
    <title>Funções Aritmeticas em PHP</title>
    <style>
        h2 {
            font: 12pt Arial;
            color: #061872;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div>
    <?php
		# os $_GET["valor"] serve para receber valores do navegador usando a ? no final da url para receber um valor ou ?x=5 & y=3 para mais de uma variavel
		/*
		url = local onde vai colocar os valores recebidos.
		? = serve para colocar os valores depois da url.
		a = variavel que vai receber o valor dentro da url ela pode ter qualquer nome, tendo o {recebar ou igual} qualquer valor sera recebido.
		& = serve para colocar mais de uma variavel para receber os valores.
		$_GET["x"] = local onde vai receber o valor da url.
		$v1 = local onde vai receber o $_GET["x"] para poder usar dentro do programa.
		*Exemplo	
			http://127.0.0.1/Aula_03/pedido%20media.php?x=5&y=3
			OU
			http://localhost/Aula_03/pedido%20media.php?y=8&x=4
			assim as variaveis x e y vão receber os valores e mandar para o get dentro das variaveis $v1 e $v2
		*/
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2>Valores recebidos $v1 e $v2</h2>";
        echo "O valor absoluto de $v2 é ", abs($v2);
        echo "<br/>O valor de $v1<sup>$v2</sup> é ", pow($v1, $v2);
        echo "<br/>A raiz de $v1 é ". sqrt($v1);
        echo "<br/>O valor de $v2 arredondado é ". round($v2); // ceil(para cima) or floor(para baixo)
        echo "<br/>A parte inteira de $v2 é ". intval($v2);
        echo "<br/>O valor de $v1 em moeda é R$", number_format($v1,2, ",", ".");
    ?>
</div>
</body>
</html>
