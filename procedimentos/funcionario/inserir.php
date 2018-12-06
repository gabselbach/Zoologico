<?php
	require('../../model/Funcionario.class.php');
	require('../../model/Conexao.class.php');
	if(isset($_POST['submit'])){
		$funcionario = new Funcionario(Null,$_POST['nome'],$_POST['atribuição'],$_POST['telefone'],$_POST['cep'],$_POST['rua'],$_POST['n'],$_POST['salario'],$_POST['data_admissao'],$_POST['email']);
		$sql = $funcionario->insert();
		$con = new Conexao();
		$con->setQuery($sql);
	 	$con->executeQuery();
    	 $con->disconnect(); //Fecha a execução da query query
    	 header('location:../../view/funcionario/funcionario.php');
	}