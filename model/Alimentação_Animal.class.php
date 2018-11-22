<?php
	class Alimentação_Animal {
		//atributos na classe
		private $idAlimentação_Animal;
		private $nome;
		private $tipo;
		private $quantidade;
		private $validade;
	 function __construct($id=null,$_nome=null,$_tipo=null,$_quantidade=null,$_validade=null){
		$this->idAlimentação_Animal=$id;
		$this->nome=$_nome;
		$this->tipo=$_tipo;
		$this->quantidade=$_quantidade;
		$this->validade=$_validade;
	}
	//gets e sets de cada atributo
	 function getId(){
		return $this->idAlimentação_Animal;
	}
	 function setId($_id){
		$this->idAlimentação_Animal=$_id;
	}

	 function getNome(){
		return $this->nome;
	}
	 function setNome($_nome){
		$this->nome=$_nome;
	}

	 function getTipo(){
		return $this->tipo;
	}
	 function setTipo($_tipo){
		$this->tipo=$_tipo;
	}

	function getQuantidade(){
		return $this->quantidade;
	}
	function setQuantidade($_quantidade){
		$this->quantidade=$_quantidade;
	}

	function getValidade(){
		return $this->validade;
	}
	function setValidade($_validade){
		$this->validade=$_validade;
	}
	
	 function insert(){

	 	$sql = "INSERT INTO Alimentacao_Animal VALUES"."(NULL,'$this->nome',$this->tipo,$this->quantidade,'$this->validade')";
	 return $sql;
		
	}
	function update(){
	$sql=" UPDATE Funcionario set nome_popular='$this->nome_popular',nome_cientifico='$this->nome_cientifico',peso=$this->peso WHERE IdAnimal=$this->idAnimal";
		return $sql;
	}
	function atribuiDados($linha){
		$this->nome_popular = $linha['nome_popular'];
		$this->nome_cientifico = $linha['nome_cientifico'];
		$this->peso = $linha['peso'];
		$this->Funcionario_idFuncionario = $linha['Funcionario_idFuncionario'];
		$this->Alimentação_idAlimentação = $linha['Alimentação_idAlimentação'];
	}
	function delete(){
		$sql = "DELETE table Animal where idAnimal = $this->idAnimal";
		return $sql;
	}
	function select(){
		$sql="SELECT * FROM Animal ";
		return $sql;
	}
}