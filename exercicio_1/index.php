<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>1ºaula PHP OO</title>
</head>
<body>
	<pre>
		<?php
			require_once 'Caneta.php';
			$c1 = new Caneta;

			$c1->modelo = "BIC cristal";
			$c1->cor = "Azul";
			$c1->tampar();

			/*$c1->cor = "vermelha";
			$c1->ponta = 0.5;
			$c1->tampar();*/

			$c1->rabiscar();

			var_dump($c1);

			print_r($c1);
		?>
	</pre>
</body>
</html>