<?php

session_start();

if (isset($_SESSION['user_id'])) {
  header('Location: /php-login');
}
require 'database.php';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
  $records->bindParam(':email', $_POST['email']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $message = '';

  if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
    $_SESSION['user_id'] = $results['id'];
    header("Location: /php-login");
  } else {
    $message = 'Sorry, those credentials do not match';
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inicio de sesión</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <link rel="stylesheet" href="estilos.css">
  <script type="text/javascript" src="script.js"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php if (!empty($message)): ?>
  <p>
    <<= $message ?>
  </p>
  <?php endif; ?>
  <script src="" async defer></script>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="index.php">
        <img src="https://github.com/echoes1205/Integradora/blob/main/logocasa.PNG?raw=true">
      </a>

      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item" href="nosotros.php">
          Nosotros
        </a>
        <a class="navbar-item" href="historia.php">
          Historia
        </a>
      </div>



    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary" href="signup.php">
            <strong>Registrarse</strong>
          </a>
          <a class="button is-light" href="login.php">
            Iniciar sesión
          </a>
        </div>
      </div>
    </div>
    </div>
  </nav>
  <br>

  <div class="registrocontainer">
    <div class="columns">
      <div class="column is-three-fifths">

        <h1>Iniciar sesión</h1>

        <form action="login.php" method="POST">

          <input name="email" type="text" placeholder="Ingresar email">

          <input name="password" type="password" placeholder="Ingresar contraseña">

          <input type="submit" value="Submit">
        </form>
      </div>
    </div>
  </div>
</body>

</html>