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
    <body>
        <div class="navbar-custom">
            <nav class="navbar navbar-dark">

                <div class="media">
                  <img src="./imgs/logo_lo.png" class="align-self-center mr-3 rounded float-right" width="100" height="100" alt="...">
                  <div class="d-flex flex-wrap align-content-center">
                      <ul class="nav nav-pills nav-link-color">
                        <li class="nav-item">
                          <a class="nav-link nav-link-color" href="./index.html">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link nav-link-color" href="./cultivo.html">Cultivo</a>
                        </li>
                        <li class="nav-item nav-link-color">
                          <a class="nav-link active" href="#">🌱 Sementes</a>
                        </li>
                        <li class="nav-item nav-link-color">
                          <a class="nav-link" href="./orcamento.html">Orçamento</a>
                        </li>
                      </ul>
                  </div>
                </div>
            </nav>
        </div>

        <div class="bg">
            <div class="p-5 text-center">
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)">
                  <div> <!-- class="d-flex justify-content-center align-items-center h-100"-->
                    <div class="text-white">
                        <table class="table table-bordered">
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
                                        <div> <!-- class="card boarder-warning mb-3 ml-3" style="max-width: 24rem"-->
                                            <div> <!-- class="card-header body border-warning"-->
                                                Informações sobre o Alimento: Tomate

                                                <ul>
                                                    <li>É um Tomate</li>
                                                    <li>Ele é Vermelho</li>
                                                </ul>

                                                <p><h5>R$ 50,00 <input type="number" value="" placeholder="Quantidade.."/><h5><p>
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
                                        <div> <!-- class="card boarder-warning mb-3 ml-3" style="max-width: 24rem"-->
                                            <div> <!-- class="card-header body border-warning"-->
                                                Informações sobre o Alimento: Abobora

                                                <ul>
                                                    <li>É uma Abobora</li>
                                                    <li>Ela é Laranja</li>
                                                </ul>

                                                <p><h5>R$ 120,00 <input type="number" value="" placeholder="Quantidade.."/><h5><p>
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
                                        <div> <!-- class="card boarder-warning mb-3 ml-3" style="max-width: 24rem"-->
                                            <div> <!-- class="card-header body border-warning"-->
                                                Informações sobre o Alimento: Alho Poró

                                                <ul>
                                                    <li>É um Alho Poró</li>
                                                    <li>Ele é verde</li>
                                                </ul>

                                                <p><h5>R$ 80,00 <input type="number" value="" placeholder="Quantidade.."/><h5><p>
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
        </div>

        <div class="footer">
            Email: equipeplantasou@gmail.com
        </div>
    </body>
</html>

<!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./imgs/plantas/tomate.png" class="plantas" alt="1">
        </div>
        <div class="carousel-item">
            <img src="./imgs/sementes/tomate.png" class="plantas" alt="2">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
</div> -->