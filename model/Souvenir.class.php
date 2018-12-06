<?php
	class Souvenir {
		//atributos na classe
		private $id; // ingresso
		private $nome;
		private $material;
		private $preco;
		private $quantidade_atual;
		private $quantidade_ideal;
		private $validade;
		private $Fornecedor_idFornecedor;
		private $venda;

	 function __construct($id=null,$_nome=null,$_material=null,$_preco=null,$_quantidade=null,$_quantidade_ideal=null,$_validade=null){
		$this->id=$id;
		$this->nome=$_nome;
		$this->material=$_material;
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

	 	$sql = "INSERT INTO Souvenir VALUES"."(NULL,'$this->nome',$this->preco,'$this->material',$this->quantidade_atual,$this->quantidade_ideal,1)";
	 return $sql;
		
	}
	function update(){
	$sql=" UPDATE Souvenir set nome='$this->nome', preco = $this->preco,
	quantidade_atual=$this->quantidade_atual,
	quantidade_ideal=$this->quantidade_ideal, material='$this->material'  WHERE cod=$this->id";
		return $sql;
	}
	function atribuiDados($linha){
		$this->nome = $linha['nome'];
		$this->preco = $linha['preco'];
	}
	function delete(){
		$sql = "UPDATE Souvenir set sit=0 WHERE cod=$this->id";
		return $sql;
	}
	function select(){
		$sql="SELECT * FROM Souvenir ";
		return $sql;
	}
	function selectA(){
		$sql="SELECT nome,preco FROM Souvenir ";
		return $sql;
	}
	function selectSouvenir(){
		$sql ="SELECT * from Souvenir where cod = $this->id";
		return $sql;
	}
	function updateQ(){
		$q = $this->quantidade_atual - $this->quantidade_ideal ;
	$sql=" UPDATE Souvenir set quantidade_atual=$q WHERE cod=$this->id";
		return $sql;
	}
	function inserirVenda(){

	 	$sql = "INSERT INTO Venda VALUES"."(NULL,now(),$this->preco)";
	 return $sql;
		
	}
	function insertSouvenir(){

	 	$sql = "INSERT INTO Souvenir_has_Venda VALUES"."($this->id,$this->venda)";
	 return $sql;
		
	}
	function selectTotal(){
		$sql = " SELECT  Round(sum(v.preco),2) as 'valores' FROM Souvenir 
		INNER JOIN Souvenir_has_Venda on (cod= Souvenir_cod)
		 INNER JOIN Venda as v on (v.idVenda= Venda_idVenda)";
		return $sql;
	}
}