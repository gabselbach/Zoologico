<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Alimentacao_Geral.class.php');
	require('../../model/Conexao.class.php');
	$a = new Alimentacao_Geral();
	$sql = $a->select();
	$con = new Conexao();
	$con->setQuery($sql);
 	$con->executeQuery();
 	$array = $con->fazLinha();
 	$cont =0;
 	$sql = $a->selectTotal();
 	$con->setQuery($sql);
 	$con->executeQuery();
 	$v = $con->Linha();
 	$valor = $v['valores'];
 	foreach($array as $i => $value) {
 		if($value['sit']==1){
 			$cont++;
 			echo "<tr><td>". $value['nome']  . "</td>
	 			<td>". $value['validade']  . "</td>
	 			<td>". $value['tipo']  . "</td>
	 			<td>". $value['preco']  . "</td>
	 			<td>". $value['quantidade_atual']  . "</td>
	 			<td>". $value['quantidade_ideal']  . "</td>
				<td><a href=\"../../procedimentos/venda/deletarAlimentacao.php?id=" . $value['cod'] . "\"><img src=\"../../img/lixeira.png\"/></a></td>
				<td><a href=\"../../view/venda/vendaAlimentacao.php?id=" . $value['cod'] . "\">Venda</a></td>
				<td><a href=\"../../view/venda/alterarAlimentacao.php?id=".$value['cod']."\"><img src=\"../../img/engre.png\"/></a></td>
	 			</tr>
	 		";
 		}
 	}
 	if($cont==0){
 		echo " Não existe produto desse tipo cadastrado";
 	}

	 $con->disconnect();
