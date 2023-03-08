<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 22</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
</head>
<body>
	<div>
		<form method="get" action="ex_022.pt2.php">
			<label for="num">Número:</label>
			<select id="num" name="n">
				<?php
					$c = 1;
					do {
						echo "<option>$c</option>";
						$c++;
					} while($c <= 10)
				?>
			</select>
			<input type="submit" class="botao" value="calcular"/>
		</form>
	</div>
</body>
</html>
