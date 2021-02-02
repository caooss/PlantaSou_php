<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PlantaSou</title>

        <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="./css/teste.css">
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body class="fundo">
        <div class="navbar-custom">
            <nav class="navbar navbar-dark">

                <div class="media">
                  <img src="./imgs/logo_lo.png" class="align-self-center mr-3 rounded float-right" width="100" height="100" alt="...">
                  <div class="d-flex flex-wrap align-content-center">
                    <ul class="nav nav-pills nav-link-color">
                      <li class="nav-item">
                        <a class="nav-link nav-link-color" href="./index.php">Home</a>
                      </li>
                      <li class="nav-item">                         
                        <a class="nav-link nav-link-color" href="./sementes.php">Sementes</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link nav-link-color active" aria-current="page" href="#">💲 Orçamento</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link nav-link-color" href="./cultivo.php">Cultivo</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </nav>
        </div>

            <div class="p-5 text-center">
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                  <div> <!-- class="d-flex justify-content-center align-items-center h-100"-->
                    <div class="text-white">
                      <table class="table table-bordered">
                          <tr>
                              <th>Quantidade</th>
                              <th>Alimentos Selecionados</th>
                              <th>Preços</th>
                              <th>Ação</th>
                          </tr>

                          <tr>
                              <td>2</td>
                              <td>Alho Poró</td>
                              <td>R$ 8,00</td>
                              <td><button type="button" name="button" class="btn btn-excluir"><a href="./orcamento_salho_poro.php">Excluir</a></button></td>
                          </tr>

                          <tr>
                              <td>1</td>
                              <td>Tomate</td>
                              <td>R$ 12,90</td>
                              <td><button type="button" name="button" class="btn btn-excluir"><a href="./orcamento_stomate.php">Excluir</a></button></td>
                          </tr>

                          <tr>
                              <th colspan="2">Total</th>
                              <th colspan="2">R$ 8,00</th>
                          </tr>

                      </table>
                    </div>
                  </div>
                </div>
            </div>
        

          <div class="footer">
            Email: equipeplantasou@gmail.com
          </div>
    </body>
</html>
