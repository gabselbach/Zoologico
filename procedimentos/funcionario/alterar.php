<?php
	require('../../model/Funcionario.class.php');
	require('../../model/Conexao.class.php');
	if(isset($_POST['submit'])){
		$funcionario = new Funcionario($_POST['id'],$_POST['nome'],$_POST['atribuição'],$_POST['telefone'],$_POST['cep'],$_POST['rua'],$_POST['n'],$_POST['salario'],$_POST['data_admissao'],$_POST['email']);
		$sql = $funcionario->update();
		$con = new Conexao();
		$con->setQuery($sql);
	 	$con->executeQuery();
	 	$con->disconnect();
	 	header('location:../../view/funcionario/funcionario.php');
	}