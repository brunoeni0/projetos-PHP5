<!DOCTYPE html>
<html>
</head>
	<meta charset="UTF-8"/>
	<title>função 21</title>
	<link rel="stylesheet" href="../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			$frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
			$count = substr_count($frase, "PHP");
			print ("PHP encontrado $count vezes");
		?>
	</div>
</body>
</html>
