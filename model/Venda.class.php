<?php
/**
 * Tabela de Venda que tem os dados da venda e do produto em questão 
 * o tipo é o tipo de produto 
 * 0 - Alimentação
 * 1 - Souvenir
 * 2 - ingressos
 */
class Venda {
		//atributos na classe
		private $idVenda;
		private $idProduto;
		private $data_hora;
		private $preço;
		private $tipo;
	// INSERT INTO zoo.Funcionario (idFuncionario, nome, atribuição, salario, data_admissao, email, rua, nº, cep)
	//função construtora da classe
	 function __construct($id=null,$_id2=null,$_data=null,$_preço=null,$_tipo=null){
		$this->idVenda=$id;
		$this->idProduto=$id;
		$this->data_hora=$_data;
		$this->preço=$_preço;
		$this->tipo=$_tipo;
	}
	//gets e sets de cada atributo
	 function getIdV(){
		return $this->idVenda;
	}
	 function setIdV($_id){
		$this->idVenda=$_id;
	}
	 function getIdP(){
		return $this->idProduto;
	}
	 function setIdP($_id2){
		$this->idProduto=$_id2;
	}
	 function getData_Hora(){
		return $this->data;
	}
	 function setData_Hora($_data){
		$this->data_hora=$_data;
	}

	 function getPreço(){
		return $this->preço;
	}
	 function setPreço($_preço){
		$this->preço=$_preço;
	}

	function getTipo(){
		return $this->tipo;
	}
	function setTipo($_tipo){
		$this->tipo=$_tipo;
	}
}