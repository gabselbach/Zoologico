<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	class Material {
		//atributos na classe
		private $id; // ingresso
		private $nome;
		private $tipo;
		private $preco;
		private $quantidade_atual;
		private $quantidade_ideal;
		private $validade;
		private $Fornecedor_idFornecedor;

	 function __construct($id=null,$_nome=null,$_tipo=null,$_preco=null,$_quantidade=null,$_quantidade_ideal=null,$_validade=null){
		$this->id=$id;
		$this->nome=$_nome;
		$this->tipo=$_tipo;
		$this->preco=$_preco;
		$this->quantidade_atual=$_quantidade;
		$this->quantidade_ideal=$_quantidade_ideal;
		$this->validade=$_validade;
	}
	//gets e sets de cada atributo
	 function getId(){
		return $this->id;
	}
	 function setId($_id){
		$this->id=$_id;
	}
	 function setPreco($_p){
		$this->preco=$_p;
	}
	function setIdFornecedor($_p){
		$this->Fornecedor_idFornecedor =$_p;
	}
	function setQuantAtual($_p){
		$this->quantidade_atual=$_p;
	}
	function setQuantIdeal($_p){
		$this->quantidade_ideal=$_p;
	}
	 function insert(){

	 	$sql = "INSERT INTO Material VALUES"."(NULL,'$this->nome',$this->preco,$this->quantidade_atual,$this->quantidade_ideal,'$this->validade',$this->tipo)";
	 return $sql;
		
	}
	function update(){
	$sql=" UPDATE Material set nome='$this->nome', preco = $this->preco,quantidade_atual=$this->quantidade_atual,quantidade_ideal=$this->quantidade_ideal WHERE cod=$this->id";
		return $sql;
	}
	function atribuiDados($linha){
		$this->nome = $linha['nome'];
		$this->preco = $linha['preco'];
	}
	function delete(){
		$sql = " DELETE FROM Material WHERE cod=$this->id ";
		return $sql;
	}
	function select(){
		$sql="SELECT * FROM Material ";
		return $sql;
	}
	function selectMaterial(){
		$sql ="SELECT * from Material where cod = $this->id";
		return $sql;
	}
	function updateQ(){
		$q = $this->quantidade_atual - $this->quantidade_ideal ;
	$sql=" UPDATE Material set quantidade_atual=$q WHERE cod=$this->id";
		return $sql;
	}
}