<?php
session_start();

require 'database.php';

if (isset($_SESSION['user_id'])) {
  $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
  $records->bindParam(':id', $_SESSION['user_id']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $user = null;

  if (count($results) > 0) {
    $user = $results;
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <link rel="stylesheet" href="estilos.css">
  <script type="text/javascript" src="script.js"></script>

  <link rel="stylesheet" href="style.css">

  <title>Casa domotica</title>

</head>

<body>
  <script src="" async defer></script>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="index.php">
        <img src="https://github.com/echoes1205/Integradora/blob/main/logocasa.PNG?raw=true">
      </a>


      <?php if (!empty($user)): ?>
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

        <a class="navbar-item" href="micasa.html">
          Mi casa
        </a>
        <a class="navbar-item" href="dispositivos.html">
          Dispositivos
        </a>

        <a class="navbar-item" href="historia.php">
          Historia
        </a>
      </div>

    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary" href="logout.php">
            <strong>Cerrar Sesión</strong>
          </a>

          </a>
          <?php else: ?>

          <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
            data-target="navbarBasicExample">
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
              </element>
            </div>
          </div>
        </div>
      </div>
  </nav>
  <br>

  <div class="registrocontainer">
    <div class="columns">
      <div class="column is-three-fifths">

        <h1>Inicio de sesión</h1>
        <?php if (!empty($message)): ?>
        <p>
          <?= $message ?>
        </p>
        <?php endif; ?>
        <form action="login.php" method="POST">

          <input name="email" type="text" placeholder="Ingresa tu email">

          <input name="password" type="password" placeholder="Ingresa tu contraseña">

          <input type="submit" value="Submit">
        </form>
      </div>
    </div>
  </div>
  <?php endif; ?>
</body>

</html>