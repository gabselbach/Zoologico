<?php
	class Triagem {
		//atributos na classe
		private $idTriagem;
		private $data;
		private $hora;
		private $observações;
		private $diagnostico;
		private $prescrição;
		private $status;
		private $idFuncionario;
		private $idAnimal;
	// INSERT INTO zoo.Funcionario (idFuncionario, nome, atribuição, salario, data_admissao, email, rua, nº, cep)
	//função construtora da classe
	 function __construct($id=null,$_data=null,$_hora=null,$_observações=null,$_dia=NULL,$_prescrição=null,$_status= null,$_func = NULL, $_animal = NULL){
		$this->idTriagem=$id;
		$this->data=$_data;
		$this->hora=$_hora;
		$this->observações=$_observações;
		$this->diagnostico = $_dia;
		$this->prescrição=$_prescrição;
		$this->status=$_status;
		$this->idAnimal = $_animal;
		$this->idFuncionario = $_func;
	}
	//gets e sets de cada atributo
	 function getId(){
		return $this->idTriagem;
	}
	 function setId($_id){
		$this->idTriagem=$_id;
	}
	function getHora(){
		return $this->hora;
	}
	function setHora($_hora){
		$this->hora=$_hora;
	}
	function getData(){
		return $this->data;
	}
	function setData($_data){
		$this->data = $_data;
	}

	function getObservações(){
		return $this->observações;
	}
	function setObservações($_observações){
		$this->observações=$_observações;
	}

	function getPrescrição(){
		return $this->prescrição;
	}
	function setPrescrição($_prescrição){
		$this->prescrição=$_prescrição;
	}

	function getSatus(){
		return $this->status;
	}
	function setStatus($_status){
		$this->status=$_status;
	}
	function getF(){
		return $this->idFuncionario;
	}
	function setF($_f){
		$this->iFuncionario=$_f;
	}
	function getA(){
		return $this->idAnimal;
	}
	function setA($_A){
		$this->idAnimal=$_A;
	}
	 function insert(){
	 	$sql = "INSERT INTO Triagem VALUES" ."(NULL,'$this->data','$this->hora',
	 	'$this->observações','$this->diagnostico','$this->prescrição','$this->status')";
	 return $sql;
		
	}
	function insertEstrangeiras(){
		$sql ="INSERT INTO Triagem_has_Funcionario_has_Animal VALUES " ."($this->idTriagem,$this->idFuncionario,$this->idAnimal)";
		return $sql;
	}
	function atribuiDados($linha){
		$this->nome_popular = $linha['nome_popular'];
		$this->nome_cientifico = $linha['nome_cientifico'];
		$this->peso = $linha['peso'];
		$this->Funcionario_idFuncionario = $linha['Funcionario_idFuncionario'];
		$this->Alimentação_idAlimentação = $linha['Alimentação_idAlimentação'];
	}
	function select(){
		$sql="
		SELECT observacoes,prescricao, diagnostico, data,hora, nome, nome_popular,status 
			FROM Triagem_has_Funcionario_has_Animal as tfa 
				INNER JOIN Triagem as t on(tfa.Triagem_idTriagem=idTriagem)
				INNER JOIN Funcionario as f on(tfa.Funcionario_idFuncionario=idFuncionario)
				INNER JOIN Animal as a on(tfa.Animal_idAnimal=idAnimal)";
		
		return $sql;
	}
}