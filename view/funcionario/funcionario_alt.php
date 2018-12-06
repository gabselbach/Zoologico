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
  <?php 
      require_once('../../procedimentos/funcionario/pegadados.php');
   ?>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 align="center">ZooSearch</h3>
                <img src = "../../analysis.png"/>
            </div>

            <ul class="list-unstyled components">
                <p>Escolha uma das opções abaixo:</p>
                <li>
                    <a href="../../index.php">Homepage</a>
                </li>
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
                    <a href="./funcionario.php">Funcionário</a>
                </li>
                <li>
                    <a href="../../view/material/material.php">Material</a>
                </li>
                <li>
                    <a href="../../view/triagem/triagem.php">Triagem</a>
                </li>
                <li>
                    <a href="../../view/venda/venda.php">Venda</a>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">
            <h2 id="animal">Funcionário - Alterar Informações</h2>
            <form method="POST" action="../../procedimentos/funcionario/alterar.php">
                  <input type="hidden" name="id" value="<?=$id?>" >
              <div class="form-group">
                <label for="exampleInputEmail1">Nome:</label>
                <input type="text" required="required" class="form-control" name="nome" id="nome" 
    value="<?=$array['nome']?>">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Atribuição:</label>
                <div class="radio">
                  <label><input type="radio" value="1"  name="atribuição" checked> Tratador</label>
                </div>
                <div class="radio">
                  <label><input type="radio" value="2" name="atribuição"> Veterinário</label>
                </div>
                <div class="radio">
                  <label><input type="radio" value="3" name="atribuição"> Estoquista</label>
                </div>
                <div class="radio">
                  <label><input type="radio" value="4" name="atribuição"> Vendedor</label>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Salário:</label>
                <input type="text" required="required" class="form-control" name="salario" id="salario"  value="<?=$array['salario']?>">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Data de admissão:</label>
                <input type="date" required="required" class="form-control" name="data_admissao" id="data_admissão" value="<?=$array['data_admissao']?>" >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Telefone:</label>
                <input type="text"  ame="telefone" id="telefone" value="<?=$array['telefone']?>" required="required" class="form-control" >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">E-mail:</label>
                <input type="email" required="required" class="form-control" name="email" id="email" value="<?=$array['email']?>" placeholder="email"  >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Rua:</label>
                <input type="text" required="required" class="form-control"  name="rua" id="rua" placeholder="rua" value="<?=$array['rua']?>">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">CEP:</label>
                <input type="text" required="required" class="form-control"  name="cep" id="cep" placeholder="cep" value="<?=$array['cep']?>" >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Número:</label>
                <input type="number" required="required" class="form-control" name="n" id="n" value="<?=$array['n']?>" >
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Alterar</button>
            </form>
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