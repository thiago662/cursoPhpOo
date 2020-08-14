<?php
	class Pessoa{
		private $nome;
		private $idade;
		private $sexo;

		public function fazerAniv(){
			$this->idade ++;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setNome($no){
			$this->nome = $no;
		}

		public function getIdade(){
			return $this->idade;
		}

		public function setIdade($id){
			$this->idade = $id;
		}

		public function getSexo(){
			return $this->sexo;
		}

		public function setSexo($se){
			$this->sexo = $se;
		}
	}
?>