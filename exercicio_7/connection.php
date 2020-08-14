<?php
	function getConnection(){
		$dsn = 'mysql:host=localhost;dbname=usuario';
		$user = 'root';
		$pass = '';

		try{
			$pdo = new PDO($dsn, $user, $pass);
			return $pdo;
		}catch(PDOException $ex){
			echo 'Erro: '.$ex->getMessage();
		}
	}
?>