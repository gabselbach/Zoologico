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
            <h2 id="animal">Funcionário</h2>
            <form  method="POST" action="../../procedimentos/funcionario/inserir.php">
              <div class="form-group">
                <label for="exampleInputEmail1">Nome:</label>
                <input type="text" required="required" name="nome" class="form-control" placeholder="Campo de texto">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Atribuição:</label>
                <div class="radio">
                  <label><input type="radio" value="1" name="atribuição" checked> Tratador</label>
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
                <input type="text" required="required" name="salario" class="form-control" placeholder="Campo de texto">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Data de admissão:</label>
                <input type="date" required="required" name="data_admissao" class="form-control" placeholder="Campo de texto">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Telefone:</label>
                <input type="text" required="required" name="telefone" class="form-control" placeholder="Campo de texto">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">E-mail:</label>
                <input type="email" required="required" name="email" class="form-control" placeholder="Campo de texto">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Rua:</label>
                <input type="text" required="required" name="rua" class="form-control" placeholder="Campo de texto">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">CEP:</label>
                <input type="text" required="required" name="cep" class="form-control" placeholder="Campo de texto">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Número:</label>
                <input type="number" required="required" name="n" class="form-control" placeholder="Campo de texto">
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
            </form>
            <div class="line"></div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Nome</th>
                  <th scope="col">Atribuição</th>
                  <th scope="col">Salário</th>
                  <th scope="col">Data de admissão</th>
                  <th scope="col">Telefone</th>
                  <th scope="col">E-mail</th>
                  <th scope="col">Rua</th>
                  <th scope="col">CEP</th>
                  <th scope="col">Número</th>
                  <th scope="col">Deletar</th>
                  <th scope="col">Alterar</th>
                </tr>
              </thead>
              <tbody>
                <tr>
               <?php 

                include ('../../procedimentos/funcionario/seleciona_todos.php'); 
                ?>
                </tr>
              </tbody>
            </table>
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