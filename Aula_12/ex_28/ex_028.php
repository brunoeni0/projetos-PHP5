<DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 28</title>
	<link rel="stylesheet" href="../../_css/estilo.css"/>
</head>
<body>
	<div>
		<?php
			function soma (){
				$s = 0;
				$l = func_get_args();
				$t = func_num_args();
				for($c = 0; $c < $t; $c++) {
					$s += $l[$c];
				}
				return $s;
			}
			$tot = soma(3, 4, 8, 1, 2);
			echo"O total é $tot";
		?>
	</div>
</body>
</html>
