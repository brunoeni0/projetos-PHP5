<!DOCTYPE html>
<html lang="pt-br">
<?php
	$n1 = isset($_GET["n1"])? $_GET["n1"] : 0;
	$n2 = isset($_GET["n2"])? $_GET["n2"] : 0;
	$media = ($n1 + $n2) / 2;
	
	if ($n1 >= 7){
		$color1 = "#00bb00";
	} elseif ($n1 >= 5){
		$color1 = "#5050ff";
	} else {
		$color1 = "#ff0000";
	}
	
	if ($n2 >= 7) {
		$color2 = "#00bb00";
	} elseif ($n2 >= 5) {
		$color2 = "#5050ff";
	} else{
		$color2 = "#ff0000";
	}
	
	if ($media >= 7) {
		$color3 = "#00bb00";
		$sit = "APROVADO";
	} elseif ($media >= 5) {
		$color3 = "#5050ff";
		$sit = "EM RECUPERAÇÃO";
	} else {
		$color3 = "#ff0000";
		$sit = "REPROVADO";
	}
?>
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 13</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
	<style>
		span.cor1 {
			color: <?php echo $color1 ?>;
		}
		span.cor2 {
			color: <?php echo $color2 ?>;
		}
		span.cor3 {
			color: <?php echo $color3 ?>;
		}
	</style>
</head>
<body>
	<div>
		<?php
			echo "A média entre <span class='cor1'>$n1</span> e <span class='cor2'>$n2</span> é igual a <span class='cor3'>$media</span> <br/>";
			echo "A situação do aluno é: <span class='cor3'>$sit</span>.";
		?>
		<a href="ex_13.html">Voltar</a>
	</div>
</body>
</html>
