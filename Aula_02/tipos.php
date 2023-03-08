<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title> Aula 2 </title>
    <link rel="stylesheet" type="text/css" href="/../_css/estilo.css"/>
</head>
<body>
<div>
    <?php
		$n = 5;
		$no = (string)'Gustavo';
		echo "O valor é $no </br>";
		echo "O valor é $n <br/>";
		$no = (int)"Gustavo";
		echo "O valor é $no <br/>";
		$no = (int) "10Gustavo";
		echo "O valor é $no <br/>";
		$no = (int) "Gustavo10";
		echo "O valor é $no <br/>";
		$n = 5.5;
		$no = 'Ricardo';
		echo "O valor é $n <br/>";
		echo "O valor é $no <br/>";
		$nome = "Ana";
		$idade = 18;
		echo "<br>$nome tem $idade anos.<br/>";
		echo '$nome tem $idade anos.<br/>';
		echo $nome." tem ".$idade." anos!<br/>";
		echo $no.' tem '.$idade.' anos!';
    ?>
</div>
</body>
</html>
