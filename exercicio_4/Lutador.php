<?php
	class Lutador{
		//Atributos
		private $nome;
		private $nacionalidade;
		private $idade, $altura, $peso;
		private $categoria, $vitorias, $derrotas, $empates;
		//Metodos
		function apresentar(){

		}

		function status(){

		}

		function ganharLuta(){
			$this->setVitorias($this->getVitorias() + 1);
		}

		function perderLuta(){
			$this->setDerrotas($this->getDerrotas() + 1);
		}

		function empatarLuta(){
			$this->setEmpates($this->getEmpates() + 1);
		}
		//Metodos Especiais
		public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
			$this->nome = $no;
			$this->nacionalidade = $na;
			$this->idade = $id;
			$this->altura = $al;
			$this->setPeso($pe);
			$this->vitorias = $vi;
			$this->derrotas = $de;
			$this->empates = $em;
		}

		function getNome(){
			return $this->nome;
		}

		function setNome($no){
			$this->nome = $no;
		}

		function getNacionalidade(){
			return $this->nacionalidade;
		}

		function setNacionalidade($na){
			$this->nacionalidade = $na;
		}

		function getIdade(){
			return $this->idade;
		}

		function setIdade($id){
			$this->idade = $id;
		}

		function getAltura(){
			return $this->altura;
		}

		function setAltura($al){
			$this->altura = $al;
		}

		function getPeso(){
			return $this->peso;
		}

		function setPeso($pe){
			$this->peso = $pe;
			$this->setCategoria($pe);
		}

		function getCategoria(){
			return $this->categoria;
		}

		function setCategoria($ca){
			if($this->peso < 52.2){
				$this->categoria = "Invalido";
			}elseif($this->peso <= 70.3){
				$this->categoria = "Leve";
			}elseif($this->peso <= 83.9){
				$this->categoria = "Medio";
			}elseif($this->peso <= 120.2){
				$this->categoria = "Pesado";
			}else{
				$this->categoria = "Invalido";
			}
		}

		function getVitorias(){
			return $this->vitorias;
		}

		function setVitorias($vi){
			$this->vitorias = $vi;
		}

		function getDerrotas(){
			return $this->derrotas;
		}

		function setDerrotas($de){
			$this->derrotas = $de;
		}

		function getEmpates(){
			return $this->empates;
		}

		function setEmpates($em){
			$this->empates = $em;
		}
	}
?>