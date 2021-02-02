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
                          <a class="nav-link active" href="#">🌱 Sementes</a>
                        </li>
                        <li class="nav-item nav-link-color">
                          <a class="nav-link" href="./orcamento.php">Orçamento</a>
                        </li>
                        <li class="nav-item nav-link-color">
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
                            <td>
                                <div data-interval="8000" id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="./imgs/plantas/abobora.png" class="plantas" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./imgs/sementes/abobora.png" class="plantas" alt="Second slide">
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="plantas_desc">
                                    <div>
                                        <div>
                                            Informações sobre o Alimento: Abóbora

                                            <ul>
                                                <li>É rico em vitamina A e C, possui fibras, potássio, magnésio, cálcio, vitamina E, ferro e vitaminas B1, B3, B5 e B6.</li>
                                                <li>Benéfico para a visão</li>
                                            </ul>

                                            <p><h5>R$ 7,00 X <input type="number" value="" placeholder="Quantidade.."/><h5><p>
                                                <div class="right">
                                                    <button type="button" name="button" class="btn btn-color">Selecionar</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div data-interval="8000" id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="./imgs/plantas/alho_poro.png" class="plantas" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./imgs/sementes/alho_poro.png" class="plantas" alt="Second slide">
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="plantas_desc">
                                    <div>
                                        <div>
                                            Informações sobre o Alimento: Alho Poró

                                            <ul>
                                                <li>Fonte de cálcio, ferro, potássio, magnésio, zinco, cobre e vitamina C</li>
                                                <li>Ajuda no Sistema Digestório</li>
                                            </ul>

                                            <p><h5>R$ 4,00 X <input type="number" value="" placeholder="Quantidade.."/><h5><p>
                                                <div class="right">
                                                    <button type="button" name="button" class="btn btn-color">Selecionar</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div data-interval="8000" id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="./imgs/plantas/tomate.png" class="plantas" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./imgs/sementes/tomate.png" class="plantas" alt="Second slide">
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="plantas_desc">
                                    <div>
                                        <div>
                                            Informações sobre o Alimento: Tomate

                                            <ul>
                                                <li>Rico em vitamina C e Licopeno</li>
                                                <li>Ajuda no transporte de oxigênio no sangue</li>
                                            </ul>

                                            <p><h5>R$ 12,90 X <input type="number" value="" placeholder="Quantidade.."/><h5><p>
                                                <div class="right">
                                                    <button type="button" name="button" class="btn btn-color">Selecionar</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
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