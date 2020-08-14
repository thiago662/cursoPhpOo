<?php
	require_once 'Aluno.php';
	class Bolsista extends Aluno{
		private $bolsa;

		public function renovarBolsa(){
			echo "Bolsa renovada";
		}

		public function pegarMensa(){
			echo "$this->nome é bolsista pagar com desconto";
		}

		public function getBolsa(){
			return $this->bolsa;
		}

		public function setBolsa($bo){
			$this->bolsa = $bo;
		}
	}
?>