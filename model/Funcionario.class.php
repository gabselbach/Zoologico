<?php
	class Funcionario {
		//atributos na classe
		private $idFuncionario;
		private $nome;
		private $atribuição;
		private $cep;
		private $rua;
		private $n;
		private $salario;
		private $data_admissão;
		private $email;
		private $telefone;
		private $linha;
	// INSERT INTO zoo.Funcionario (idFuncionario, nome, atribuição, salario, data_admissao, email, rua, nº, cep)
	//função construtora da classe
	 function __construct($id=null,$_nome=null,$_atribuicao=null,$telefone=null,$_cep=null,$_rua= null,$_n=null,$_salario=null,$_data_admissão= null,$_email=null){
		$this->idFuncionario=$id;
		$this->nome=$_nome;
		$this->telefone=$telefone;
		$this->atribuição=$_atribuicao;
		$this->cep=$_cep;
		$this->n=$_n;
		$this->salario=$_salario;
		$this->data_admissão=$_data_admissão;
		$this->email=$_email;
		$this->rua = $_rua;
		
	}
	//gets e sets de cada atributo
	 function getId(){
		return $this->idFuncionario;
	}
	 function setId($_id){
		$this->idFuncionario=$_id;
	}

	 function getNome(){
		return $this->nome;
	}
	 function setNome($_nome){
		$this->nome=$_nome;
	}

	 function getTelefone(){
		return $this->telefone;
	}
	 function setTelefone($_telefone){
		$this->telefone=$_telefone;
	}

	function getNº(){
		return $this->n;
	}
	function setNº($_nº){
		$this->n=$_n;
	}

	function getCep(){
		return $this->cep;
	}
	function setCep($_cep){
		$this->cep=$_cep;
	}

	function getRua(){
		return $this->rua;
	}
	function setRua($_rua){
		$this->rua=$_rua;
	}
	function getSalario(){
		return $this->salario;
	}
	function setSalario($_Salario){
		$this->salario=$_Salario;
	}
	function getData_Admissão(){
		return $this->data_admissão;
	}
	function setData_Admissão($data){
		$this->data_admissão=$hora;
	}

	function getEmail(){
		$this->email;
	}
	function setEmail($_email){
		$this->email=$_email;
	}
	function getAtribuição(){
		$this->atribuição;
	}
	function setAtribuição($_atribuicao){
		$this->atribuição=$_atribuicao;
	}
	 function insert(){
	 	$sql = "INSERT INTO Funcionario  VALUES" ."(NULL,'$this->nome',$this->atribuição,$this->salario,'$this->data_admissão','$this->email',
	 		'$this->rua',$this->n,$this->cep,$this->telefone)";
	 return $sql;
		
	}
	function update(){
	$sql=" UPDATE Funcionario set nome='$this->nome',atribuicao='$this->atribuição',salario=$this->salario,data_admissao='$this->data_admissão', email='$this->email', cep=$this->cep, rua=$this->rua, n=$this->n WHERE IdFuncionario=$this->idFuncionario";
		return $sql;
	}
	function atribuiDados($linha){
		$this->nome = $linha['nome'];
		$this->atribuição = $linha['atribuicao'];
		$this->salario = $linha['salario'];
		$this->data_admissao = $linha['data_admissao'];
		$this->email = $linha['email'];
		$this->cep = $linha['cep'];
		$this->n = $linha['n'];
		$this->rua = $linha['rua'];
	}
	function delete(){
		$sql = "DELETE from Funcionario where idFuncionario = $this->idFuncionario";
		return $sql;
	}
	function select(){
		$sql="SELECT * FROM Funcionario ";
		return $sql;
	}
	function selectNome(){
		$sql ="SELECT nome,idFuncionario from Funcionario";
		return $sql;
	}
	function selectFuncionario(){
		$sql ="SELECT * from Funcionario where idFuncionario = $this->idFuncionario";
		return $sql;
	}
	
}