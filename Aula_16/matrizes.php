<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title></title>
	<link rel="stylesheet" href="../_css/estilo.css"/>
</head>
<body>
	<div>
		<pre>
			<?php
				$m = array( array(2, 3),
						    array(3, 4),
						    array(9, 5));
						   
				$m[2][0] = $m[1][1];
				print_r($m);
			?>
		</pre>
	</div>
</body>
</html>
