<?php
	class Fornecedor {
		//atributos na classe
		private $id;
		private $tipo;
		private $nome;
		private $email;
		private $telefone;
	// INSERT INTO zoo.Funcionario (idFuncionario, nome, atribuição, salario, data_admissao, email, rua, nº, cep)
	//função construtora da classe
	 function __construct($id=null,$_tipo=null,$_telefone=null,$_nome= null,$_email=null){
		$this->id=$id;
		$this->telefone=$_telefone;
		$this->tipo=$_tipo;
		$this->nome=$_nome;
		$this->email=$_email;
		
	}
	//gets e sets de cada atributo
	 function getIdF(){
		return $this->idFornecedor;
	}
	 function setIdF($_id){
		$this->idFornecedor=$_id;
	}
	 function getIdE(){
		return $this->idEstoque;
	}
	 function setIdE($_id){
		$this->idEstoque=$_id;
	}

	 function getTipo(){
		return $this->tipo;
	}
	 function setTipo($_tipo){
		$this->tipo=$_tipo;
	}

	 function getTelefone(){
		return $this->telefone;
	}
	 function setTelefone($_telefone){
		$this->telefone=$_telefone;
	}

		function getEmail(){
		$this->email;
	}
	function setEmail($_email){
		$this->email=$_email;
	}
	 function insert(){
	 	$sql = "INSERT INTO Fornecedor VALUES" ."(NULL,'$this->nome','$this->email',$this->telefone,'$this->tipo')";
	 return $sql;
		
	}
	function update(){
	$sql=" UPDATE Fornecedor set nome='$this->nome',telefone=$this->telefone, email='$this->email',tipo='$this->tipo' WHERE IdFornecedor=$this->id";
	echo $sql;
		return $sql;
	}
	function delete(){
		$sql = "DELETE FROM Fornecedor WHERE IdFornecedor=$this->id";
		return $sql;
	}
	function select(){
		$sql = "SELECT * FROM Fornecedor ";
		return $sql;
	}
	function selectFornecedor(){
		$sql = "SELECT * FROM Fornecedor WHERE  IdFornecedor=$this->id";
		return $sql;
	}

}