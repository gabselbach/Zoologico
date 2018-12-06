<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>ZooSearch</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../../style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="search.png">

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 align="center">ZooSearch</h3>
               <a href="../../index.php"> <img src = "../../analysis.png"/>  </a>
            </div>

            <ul class="list-unstyled components">
                <p>Escolha uma das opções abaixo:</p>
                <li>
                    <a href="../../view/alimentação/alimentacao.php">Alimentação</a>
                </li>
                <li>
                    <a href="../../view/animal/animal.php">Animal</a>
                </li>
                <li>
                    <a href="../../view/fornecedor/fornecedor.php">Fornecedor</a>
                </li>
                <li>
                    <a href="../../view/funcionario/funcionario.php">Funcionário</a>
                </li>
                <li>
                    <a href="../../view/material/material.php">Material</a>
                </li>
                <li>
                    <a href="../../view/triagem/triagem.php">Triagem</a>
                </li>
                <li>
                    <a href="./venda.php">Venda</a>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">
            <h2 id="alimentacao">Vendas</h2>
            <!-- <?php 
               // if($_GET['id']==3)
         // echo" <button type=\"submit\" name=\"submit\" class=\"btn btn-success\">Alterado</button>"; 
             // ?>!-->
            <div class="line"></div>
            <h2 id="alimentacao">Alimentação</h2>
            <form method="POST" action="../../procedimentos/venda/inserirAlimentacao.php">
              <div class="form-group">
                <label for="exampleInputEmail1">Nome:</label>
                <input type="text" name="nome" required="required" class="form-control" placeholder="Digite aqui">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Preço:</label>
                <input type="text" name="preco" required="required" class="form-control" placeholder="Digite aqui">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Tipo:</label>
                <div class="radio">
                  <label><input type="radio" value="Normal" name="tipo" checked> Normal</label>
                </div>
                <div class="radio">
                  <label><input type="radio" value="Vegetariana" name="tipo"> Vegetariana</label>
                </div>
                <div class="radio">
                  <label><input type="radio" value="Bebida" name="tipo"> Bebida</label>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Validade:</label>
                <input type="date" name="validade" required="required" class="form-control" placeholder="Digite aqui">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Quantidade:</label>
                <input type="number"  name="quantidade" required="required" class="form-control" placeholder="Digite aqui">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Quantidade ideal:</label>
                <input type="number"  name="qt_ideal" required="required" class="form-control" placeholder="Digite aqui">
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
            </form>
            <div class="line"></div>
            <h2 id="alimentacao">Souvenir</h2>
            <form method="POST" action="../../procedimentos/venda/inserirSouvenir.php">
              <div class="form-group">
                <label for="exampleInputEmail1">Nome:</label>
                <input type="text" name="nome" required="required" class="form-control" placeholder="Digite aqui">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Preço:</label>
                <input type="text"  name="preco" required="required" class="form-control" placeholder="Digite aqui">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Material:</label>
                <input type="text"  name="material" required="required" class="form-control" placeholder="Digite aqui">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Quantidade:</label>
                <input type="number" name="quantidade" required="required" class="form-control" placeholder="Digite aqui">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Quantidade Ideal:</label>
                <input type="number" name="qt_ideal" required="required" class="form-control" placeholder="Digite aqui">
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
            </form>
            <div class="line"></div>
            <h2 id="alimentacao">Alimentação</h2>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Nome</th>
                  <th scope="col">Preço</th>
                  <th scope="col">Tipo</th>
                  <th scope="col">Validade</th>
                  <th scope="col">Quantidade</th>
                  <th scope="col">Quantidade Ideal</th>
                 <th scope="col">Deletar</th>
                  <th scope="col">Vender</th>
                  <th scope="col">Alterar</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                 <?php
                  include ('../../procedimentos/venda/seleciona_todos_alimentacao.php'); 
                  ?>
                </tr>
                <?php
                 if($valor >0 )
                    echo " O total de vendas de Alimentação é = R$ " . $valor;
                  else
                    "Não ocorreram vendas ainda...";?>
              </tbody>
            </table>
            <div class="line"></div>
            <h2 id="alimentacao">Souvenir</h2>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Nome</th>
                  <th scope="col">Preço</th>
                  <th scope="col">Material</th>
                  <th scope="col">Quantidade</th>
                  <th scope="col">Quantidade Ideal</th>
                  <th scope="col">Deletar</th>
                    <th scope="col">Vender</th>
                  <th scope="col">Alterar</th>
                </tr>
              </thead>
              <tbody>
                <tr>
               <?php 

                  include ('../../procedimentos/venda/seleciona_todos_souvenir.php'); 

                  ?>
                </tr>
                <?php
                if($valor >0 )
                  echo " O total de vendas de Souvenir é = R$ " . $valor;
                else
                  "Não ocorreram vendas ainda...";?>
              </tbody>
            </table>
        <div class="line"></div>
          <h2 id="ingresso">Ingressos</h2>
          <tbody>
                        <?php
              include ('../../procedimentos/venda/seleciona_todos_ingresso.php');
              if($valor >0 )
                echo " O total de vendas de Alimentação é = R$ " . $valor;
              else
                "Não ocorreram vendas ainda...";
              ?>
               <br><button type="submit" name="submit" class="btn btn-primary"><a href="../../procedimentos/venda/inserirIngresso.php">Cadastrar Ingresso</a></button>
          </tbody>
                  </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>
