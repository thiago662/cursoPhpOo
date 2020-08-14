<?php
	session_start();

	if (isset($_SESSION['id']) && isset($_SESSION['adm'])) {
		$id = $_SESSION['id'];
		$adm = $_SESSION['adm'];

		include 'Connection.php';

		$conn = getConnection();

		$sql = "SELECT * FROM usuario WHERE id = ?";

		$stmt = $conn->prepare($sql);
		$stmt->bindParam(1, $id);
		$stmt->execute();

		$result = $stmt->fetchAll();

		if ($adm == 1) {
			foreach($result as $value){
				echo "olá ".$value['nome']." você é um ADM";
			}
		}else{
			foreach($result as $value){
				echo "olá ".$value['nome']." você não é um ADM";
			}
		}
	}else{
		header('Location: index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dentro</title>
</head>
<body>
	<a href="sair.php">Sair</a>
</body>
</html>