<?php
	class Fornecedor_Estoque {
		//atributos na classe
		private $idFornecedor;
		private $idEstoque;
		private $tipo;
		private $quantidade_atual;
		private $quantidade_ideal;
		private $validade;
		private $Funcionario_idFuncionario;
		private $email;
		private $telefone;
	// INSERT INTO zoo.Funcionario (idFuncionario, nome, atribuição, salario, data_admissao, email, rua, nº, cep)
	//função construtora da classe
	 function __construct($id=null,$id2=null,$_tipo=null,$_quantidade_atual=null,$telefone=null,$_quantidade_ideal=null,$_validade= null,$_Funcionario_idFuncionario=null,$_salario=null,$_email=null){
		$this->idFornecedor=$id;
		$this->idEstoque=$id2;
		$this->telefone=$_telefone;
		$this->tipo=$_tipo;
		$this->quantidade_atual=$_quantidade_atual;
		$this->quantidade_ideal=$_quantidade_ideal;
		$this->Funcionario_idFuncionario=$_Funcionario_idFuncionario;
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

	function getQuantidade_Atual(){
		return $this->quantidade_atual;
	}
	function setQuantidade_Atual($_quantidade_atual){
		$this->quantidade_atual=$_quantidade_atual;
	}

	function getQuantidade_Ideal(){
		return $this->quantidade_ideal;
	}
	function setQuantidade_Ideal($_quantidade_ideal){
		$this->quantidade_ideal=$_quantidade_ideal;
	}
		function getEmail(){
		$this->email;
	}
	function setEmail($_email){
		$this->email=$_email;
	}
	function getFuncionario(){
		return $this->Funcionario_idFuncionario;
	}
	function setFuncionario($_Funcionario_idFuncionario){
		$this->Funcionario_idFuncionario=$_Funcionario_idFuncionario;
	}
}