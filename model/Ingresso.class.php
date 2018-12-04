<?php
	class Ingresso {
		//atributos na classe
		private $id;
		private $s;
		private $preco = 20;
		private $venda;
	 function __construct($id=null){
		$this->id=$id;
	}
	//gets e sets de cada atributo
	function setPreco($p){
		$this->preco = $p;
	}
	function setIdVenda($v){
		$this->venda = $v;
	}
	function getPreco(){
		return $preco;
	}
	 function insert(){

	 	$sql = "INSERT INTO Ingresso VALUES"."(NULL,0,1)";
	 return $sql;
		
	}
	function updateS(){
	$sql=" UPDATE Ingresso set situacao=1 WHERE cod=$this->id";
		return $sql;
	}
	function select(){
		$sql="SELECT * FROM Ingresso ";
		return $sql;
	}
	function inserirVenda(){

	 	$sql = "INSERT INTO Venda VALUES"."(NULL,now(),$this->preco)";
	 return $sql;
		
	}
	
	function selectAlimentacao(){
		$sql ="SELECT * from Alimentacao_Animal where idAlimentacao_Animal = $this->idAlimentação_Animal";
		return $sql;
	}
	function insertIngresso(){

	 	$sql = "INSERT INTO Ingresso_has_Venda VALUES"."($this->id,$this->venda)";
	 return $sql;
		
	}
	function selectVendidos(){
		$sql = "SELECT data_hora,cod from Ingresso INNER JOIN Ingresso_has_Venda on (cod = Ingresso_cod) INNER JOIN Venda on (Venda_idVenda = idVenda)";
		return $sql;
	}
	function selectTotal(){
		$sql = " SELECT  Round(sum(v.preco),2) as 'valores' FROM Ingresso 
		INNER JOIN Ingresso_has_Venda on (cod= Ingresso_cod)
		 INNER JOIN Venda as v on (v.idVenda= Venda_idVenda)";
		return $sql;
	}
}