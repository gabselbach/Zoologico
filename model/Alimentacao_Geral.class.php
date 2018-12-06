<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	class Alimentacao_Geral {
		//atributos na classe
		private $id; // ingresso
		private $nome;
		private $tipo;
		private $preco;
		private $quantidade_atual;
		private $quantidade_ideal;
		private $validade;
		private $Fornecedor_idFornecedor;
		private $venda;

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
	function setIdVenda($_p){
		$this->venda=$_p;
	}
	function setQuantAtual($_p){
		$this->quantidade_atual=$_p;
	}
	function setQuantIdeal($_p){
		$this->quantidade_ideal=$_p;
	}
	 function insert(){

	 	$sql = "INSERT INTO Alimentacao_Geral VALUES"."(NULL,'$this->nome','$this->tipo',$this->preco,$this->quantidade_atual,$this->quantidade_ideal,'$this->validade',1)";
	 return $sql;
		
	}
	function update(){
	$sql=" UPDATE Alimentacao_Geral set nome='$this->nome', preco = $this->preco,quantidade_atual=$this->quantidade_atual,quantidade_ideal=$this->quantidade_ideal WHERE cod=$this->id";
		return $sql;
	}
	function atribuiDados($linha){
		$this->nome = $linha['nome'];
		$this->preco = $linha['preco'];
	}
	function delete(){
		$sql = " UPDATE Alimentacao_Geral set sit=0 WHERE cod=$this->id ";
		return $sql;
	}
	function select(){
		$sql="SELECT * FROM Alimentacao_Geral ";
		return $sql;
	}
	function selectA(){
		$sql="SELECT nome,preco FROM Alimentacao_Geral ";
		return $sql;
	}
	function selectAlimentacao(){
		$sql ="SELECT * from Alimentacao_Geral where cod = $this->id";
		return $sql;
	}
	function updateQ(){
		$q = $this->quantidade_atual - $this->quantidade_ideal ;
	$sql=" UPDATE Alimentacao_Geral set quantidade_atual=$q WHERE cod=$this->id";
		return $sql;
	}
	function inserirVenda(){

	 	$sql = "INSERT INTO Venda VALUES"."(NULL,now(),$this->preco)";
	 return $sql;
		
	}
	function insertAlimentacaoVenda(){

	 	$sql = "INSERT INTO Alimentacao_Geral_has_Venda VALUES"."($this->id,$this->venda)";
	 return $sql;
		
	}
	function selectTotal(){
		$sql = " SELECT  Round(sum(v.preco),2) as 'valores' FROM Alimentacao_Geral 
		INNER JOIN Alimentacao_Geral_has_Venda on (cod= Alimentacao_Geral_cod)
		 INNER JOIN Venda as v on (v.idVenda= Venda_idVenda)";
		return $sql;
	}
}