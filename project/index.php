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

      <div class="card-login">
        <div class="card">
          <div class="card-header">
            Login
          </div>
          <div class="card-body">
            <form action="valida_login.php" method="post">
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="E-mail">
              </div>
              <div class="form-group">
                <input type="password" name="senha" class="form-control" placeholder="Senha">
              </div>

              <!-- trecho PHP -->
              <?php if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                <div class="text-danger text-center">
                  Usuário ou senha inválido(s)
                </div>

              <?php } ?>

              <?php if (isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>
                <div class="text-danger text-center">
                  Faça login para acessar esta página
                </div>

              <?php } ?>

              <!-- fim trecho PHP -->

              <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</body>

</html>