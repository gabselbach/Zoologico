<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Triagem.class.php');
	require('../../model/Conexao.class.php');
	if(isset($_POST['submit'])){
		$t = new Triagem(Null,$_POST['data'],$_POST['hora'],$_POST['observações'],$_POST['diagnostico'],$_POST['prescricao'],$_POST['status'],$_POST['funcionario'],$_POST['animal']);
		$sql = $t->insert();
		$con = new Conexao();
		$con->setQuery($sql);
	 	$con->executeQuery();
	 	$sql = $con->pegaUltimo();
	 	$con->setQuery($sql);
	 	$con->executeQuery();
	 	$id = $con->linha();
	 	$t->setId($id['LAST_INSERT_ID()']);
	 	//tabela de chaves estrangueiras
	 	$sql = $t->insertEstrangeiras();
		$con->setQuery($sql);
	 	$con->executeQuery();
    	 $con->disconnect(); //Fecha a execução da query query
    	header('location:../../view/triagem/inserir.php?v=ok');
	}