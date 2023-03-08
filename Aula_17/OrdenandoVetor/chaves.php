<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta>
	<title>chaves ordenada</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
</head>
<body>
	<div>
		<pre>
			<?php
				$v = array(2=>"A", 5=>"J", 3=>"M", 7=>"X", 1=>"K");
				print_r($v);
				ksort($v);
				print_r($v);
			?>
		</pre>
	</div>
</body>
</html>
