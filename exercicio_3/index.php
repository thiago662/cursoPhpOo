<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>3ºaula PHP OO</title>
</head>
<body>
	<pre>
		<?php
			require_once 'ControleRemoto.php';

			$cr1 = new ControleRemoto();

			$cr1->ligar();
			$cr1->abrirMenu();
		?>
	</pre>
</body>
</html>