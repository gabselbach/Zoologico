<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Alimentacao_Geral.class.php');
	require('../../model/Conexao.class.php');
	if(isset($_POST['submit'])){
		$valor = $_POST['preco']*$_POST['quantidade_vendida'];
		$ali = new Alimentacao_Geral($_POST['id']);
		$ali->setPreco($valor);
		$ali->setQuantAtual($_POST['quantidade_atual']);
		$ali->setQuantIdeal($_POST['quantidade_vendida']); //vendida
		$sql = $ali->updateQ();
		$con = new Conexao();
		$con->setQuery($sql);
	 	$con->executeQuery();
	 	//ate aqui foi
	 	// ate aqui só alterou a configuração
	 	$sql = $ali->inserirVenda();
	 	$con->setQuery($sql);
	 	$con->executeQuery();
	 	
	 	// cadastrou a tabela venda
	 	$sql = $con->pegaUltimo();
	 	$con->setQuery($sql);
	 	$con->executeQuery();
	 	$id = $con->linha();
	 	$ali->setIdVenda($id['LAST_INSERT_ID()']);
		$sql = $ali->insertAlimentacaoVenda();
		$con->setQuery($sql);
	 	$con->executeQuery();
		//fazer o insert dessa parte
    	 $con->disconnect(); //Fecha a execução da query query
    	 header('location:../../view/venda/venda.php');
    	
	}