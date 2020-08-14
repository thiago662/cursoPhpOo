<?php
	require_once 'Pessoa.php';
	class Aluno extends Pessoa{
		private $matr;
		private $curso;

		public function cancelarMatr(){
			echo "<br/>Matricula será cancelada<br/>";
		}

		public function getMatr(){
			return $this->matr;
		}

		public function setMatr($ma){
			$this->matr = $ma;
		}

		public function getCurso(){
			return $this->curso;
		}

		public function setCurso($cu){
			$this->curso = $cu;
		}
	}
?>