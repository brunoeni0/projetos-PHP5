<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php
		$font = isset($_GET["t"])? $_GET["t"] : "12pt";
		$color = isset($_GET["cor"])? $_GET["cor"] : "#000000";
	?>
	<meta charset="UTF-8"/>
	<title>Exercício_10</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
	<style>
		span.texto {
			font-size: <?php echo $font; ?>;
			color: <?php echo $color; ?>;
		}
	</style>
</head>
<body>
	<div>
		<?php
			$txt = isset($_GET["txt"])? $_GET["txt"] : "Texto Generico";
			echo "<span class='texto'>$txt</span>";
		?>
		<a href="ex_10.html">Voltar</a>
	</div>
</body>
</html>
