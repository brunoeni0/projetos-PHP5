<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>chaves associativas</title>
	<link rel="stylesheet" href="../_css/estilo.css"/>
</head>
<body>
	<div>
		<pre>
			<?php
				$cad = array("nome"=>"Ana",
							 "idade"=>23,
							 "peso"=>78.5);
				$cad["fuma"] = true;
				print_r($cad);
			?>
		</pre>
	</div>
</body>
</html>
