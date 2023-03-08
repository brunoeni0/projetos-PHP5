<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 17</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
</head>
<body>
	<div>
		<form method="get" action="ex_018pt2.php">
			<?php
				$c= 1;
				while ($c <= 5) {
					echo "<label for='num$c'>valor $c:</label> <input type='number' id='num$c' name='n$c' min='0' max='100' required /> <br/>";
					$c++;
				}
			?>
			<input type='submit' class='botao' value='enviar'/>
		</form>
	</div>
</body>
<html>
