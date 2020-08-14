<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>4ºaula PHP OO</title>
</head>
<body>
	<pre>
		<?php
			require_once 'Lutador.php';
			require_once 'Luta.php';
			$l1 = new Lutador("Marcio", "Salto", 17, 1.75, 75, 2, 2, 2);
			$l2 = new Lutador("Vida", "Sorocaba", 52, 1.75, 75, 10, 5, 4);
			$lu = new Luta();
			$lu->marcarLuta($l1, $l2);
			$lu->lutar();
		?>
	</pre>
</body>
</html>