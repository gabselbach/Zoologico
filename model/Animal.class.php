<?php
	class Animal {
		//atributos na classe
		private $idAnimal;
		private $nome_popular;
		private $nome_cientifico;
		private $peso;
		private $Funcionario_idFuncionario;
		private $Alimentação_idAlimentação;
	// INSERT INTO zoo.Funcionario (idFuncionario, nome, atribuição, salario, data_admissao, email, rua, nº, cep)
	//função construtora da classe
	 function __construct($id=null,$_nome_popular=null,$_nome_cientifico=null,$_peso=null,$_funcionario=null,$_alimentação= null){
		$this->idAnimal=$id;
		$this->nome_popular=$_nome_popular;
		$this->nome_cientifico=$_nome_cientifico;
		$this->peso=$_peso;
		$this->Funcionario_idFuncionario=$_funcionario;
		$this->Alimentação_idAlimentação=$_alimentação;
		
	}
	//gets e sets de cada atributo
	 function getId(){
		return $this->idAnimal;
	}
	 function setId($_id){
		$this->idAnimal=$_id;
	}

	 function getNomeP(){
		return $this->nome_popular;
	}
	 function setNomeP($_nome_popular){
		$this->nome_popular=$_nome_popular;
	}

	 function getNomeC(){
		return $this->telefone;
	}
	 function setNomeC($_nome_cientifico){
		$this->nome_cientifico=$_nome_cientifico;
	}

	function getPeso(){
		return $this->peso;
	}
	function setPeso($_peso){
		$this->peso=$_peso;
	}

	function getFuncionario_idFuncionario(){
		return $this->Funcionario_idFuncionario;
	}
	function setFuncionario_idFuncionario($_funcionario){
		$this->Funcionario_idFuncionario=$_funcionario;
	}

	function getAlimentação_idAlimentação(){
		return $this->Alimentação_idAlimentação;
	}
	function setAlimentação_idAlimentação($_alimentação){
		$this->Alimentação_idAlimentação=$_alimentação;
	}
	 function insert(){
	 	$sql = "INSERT INTO Animal VALUES" ."(NULL,$this->peso,'$this->nome_popular','$this->nome_cientifico',NULL,NULL)";
	 return $sql;
		
	}
	function update(){
	$sql=" UPDATE Animal set nome_popular='$this->nome_popular',nome_cientifico='$this->nome_cientifico',peso=$this->peso WHERE IdAnimal=$this->idAnimal";
	echo $sql;
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
		$sql = "DELETE from Animal where idAnimal = $this->idAnimal";
		return $sql;
	}
	function select(){
		$sql="SELECT * FROM Animal ";
		return $sql;
	}
	function selectNome(){
		$sql ="SELECT nome_popular,idAnimal from Animal";
		return $sql;
	}
		function selectAnimal(){
			echo $this->idAnimal;
		$sql ="SELECT * from Animal where idAnimal = $this->idAnimal";
		return $sql;
	}
}