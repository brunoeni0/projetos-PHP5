<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 24 </title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
</head>
<body>
	<div>
		<form method="get" action="ex_024.pt2.php">
			<label for="num">Tabuada:</label> 
			<select id="num" name="n">
			<?php
				for($c = 1; $c <= 10; $c++) {
					echo "<option>$c</option>";
				}
			?>
			</select>
			<input type="submit" class="botao" value="calcular"/>
		</form>
	</div>
</body>
</html>
