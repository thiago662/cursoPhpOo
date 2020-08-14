<?php
	require_once 'Pessoa.php';
	class Aluno extends Pessoa{
		private $matricula;
		private $curso;
		
		public function pegarMensa(){
			echo "pagando mensalidade do aluno $this->nome";
		}

		public function getMatri(){
			return $this->matricula;
		}

		public function setMatri($ma){
			$this->matricula = $ma;
		}

		public function getCurso(){
			return $this->curso;
		}

		public function setCurso($cu){
			$this->curso = $cu;
		}
	}
?>