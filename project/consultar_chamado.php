<?php require_once 'valida_acesso_paginas.php' ?>
<?php require_once 'recupera_registro.php' ?>

<html>

<head>
  <meta charset="utf-8" />
  <title>Help Desk</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      Help Desk
    </a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="logoff.php">Sair</a>
      </li>
    </ul>
  </nav>

  <div class="container">
    <div class="row">

      <div class="card-consultar-chamado">
        <div class="card">
          <div class="card-header">
            Consulta de chamado
          </div>

          <div class="card-body">
            <!-- listando chamados -->
            <?php foreach($chamados as $chamado){ 
              $chamado = converteOperador($chamado); ?>
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"> <?= $chamado['1'] ?> </h5>
                  <h6 class="card-subtitle mb-2 text-muted">  <?= $chamado['2'] ?> </h6>
                  <p class="card-text"> <?= $chamado['3'] ?> </p>
                </div>
              </div>

            <?php } ?>
            <div class="row mt-5">
              <div class="col-6">
                <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>