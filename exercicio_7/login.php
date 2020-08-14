<?php
	include 'Connection.php';

	$conn = getConnection();

	if (isset($_GET['email']) && isset($_GET['senha'])) {
		$email = $_GET['email'];
		$senha = $_GET['senha'];

		$sql = "SELECT * FROM usuario WHERE email = ? AND senha = ?";

		$stmt = $conn->prepare($sql);
		$stmt->bindParam(1, $email);
		$stmt->bindParam(2, $senha);
		$stmt->execute();

		$num = $stmt->rowCount();

		if ($num == 1) {
			$result = $stmt->fetchAll();

			foreach($result as $value){
				$adm = $value['adm'];

				session_start();

				if ($adm == 1) {
					$_SESSION['id'] = $value['id'];
					$_SESSION['adm'] = $value['adm'];
				}else{
					$_SESSION['id'] = $value['id'];
					$_SESSION['adm'] = $value['adm'];
				}

				header('Location: dentro.php');
			}
		}else{
			echo "o email ou senha digitados errado";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dentro</title>
</head>
<body>
	<a href="index.php">Sair</a>
</body>
</html>