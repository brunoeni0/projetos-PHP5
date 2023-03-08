<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>chaves personalizadas</title>
	<link rel="stylesheet" href="../_css/estilo.css"/>
</head>
<body>
	<div>
		<pre>
			<?php
				$v = array(3=>"A",
						   1=>"B", 
						   6=>"C",
						   7=>"D");
				$v[] = "E";
				unset($v[6]);
				print_r($v);
			?>
		</pre>
	</div>
</body>
</html>
