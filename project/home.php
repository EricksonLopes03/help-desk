<?php require_once 'valida_acesso_paginas.php' ?>

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
  </nav>

  <div class="container">
    <div class="row">

      <div class="card-home">
        <div class="card">
          <div class="card-header">
            Menu
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-6 d-flex justify-content-center">
                <a href="abrir_chamado.php" title="Iniciar Chamado">
                  <img src="images/formulario_abrir_chamado.png" width="70" height="70">
                </a>
              </div>
              <div class="col-6 d-flex justify-content-center">
                <a href="consultar_chamado.php" title="Consultar Chamado">
                  <img src="images/formulario_consultar_chamado.png" width="70" height="70">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>