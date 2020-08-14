<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>2ºaula PHP OO</title>
</head>
<body>
	<pre>
		<?php
			require_once 'Caneta.php';

			$c1 = new Caneta("BIC","Azul",0.5);

			/*$c1->setModelo("BIC");
			$c1->setPonta(0.5);

			print "<p>Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}</p>";*/

			print_r($c1);

			var_dump($c1);
		?>
	</pre>
</body>
</html>