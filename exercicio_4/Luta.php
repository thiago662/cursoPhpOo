<?php
	require_once 'Lutador.php';
	class Luta{
		private $desafiado;
		private $desafiante;
		private $rounds;
		private $aprovada;

		public function marcarLuta($l1, $l2){
			if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
				$this->aprovada = true;
				$this->desafiado = $l1;
				$this->desafiante = $l2;
			}else{
				$this->aprovada = true;
				$this->desafiado = null;
				$this->desafiante = null;
			}
		}

		public function lutar(){
			if($this->aprovada){
				echo "<br/>desafiado: ".$this->desafiado->getNome()."<br/>desafiante: ".$this->desafiante->getNome()."<br/>";
				$vencedor = rand(0,2);
				switch($vencedor){
					case 0:
						echo "<br/>Empate<br/>";
						$this->desafiado->empatarLuta();
						$this->desafiante->empatarLuta();
						break;
					case 1:
						echo "<br/>".$this->desafiado->getNome()."<br/>";
						$this->desafiado->ganharLuta();
						$this->desafiante->perderLuta();
						break;
					case 2:
						echo "<br/>".$this->desafiante->getNome()."<br/>";
						$this->desafiado->perderLuta();
						$this->desafiante->ganharLuta();
						break;
				}
			}else{
				echo "luta não pode acontecer";
			}
		}

		public function getDesafiado(){
			return $this->desafiado;
		}

		public function setDesafiado($dd){
			$this->desafiado = $dd;
		}

		public function getDesafiante(){
			return $this->desafiante;
		}

		public function setDesafiante($df){
			$this->desafiante = $df;
		}

		public function getRounds(){
			return $this->rounds;
		}

		public function setRounds($r){
			$this->rounds = $r;
		}

		public function getAprovada(){
			return $this->aprovada;
		}

		public function setAprovada($ap){
			$this->aprovada = $ap;
		}
	}
?>