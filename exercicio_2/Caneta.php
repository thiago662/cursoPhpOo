<?php
	class Caneta{
		private $modelo;
		private $ponta;
		private $cor;
		private $tampada;

		public function __construct($m, $p, $c){
			$this->modelo = $m;
			$this->ponta = $p;
			$this->cor = $c;
			$this->tampar();
		}

		/*public function Caneta(){
			$this->cor = "Azul";
			$this->tampar();
		}*/

		public function getModelo(){
			return $this->modelo;
		}

		public function setModelo($m){
			$this->modelo = $m;
		}

		public function getPonta(){
			return $this->ponta;
		}

		public function setPonta($p){
			$this->ponta = $p;
		}

		public function tampar(){
			$this->tampada = true;
		}

		public function destampar(){
			$this->tampada = false;
		}
	}
?>