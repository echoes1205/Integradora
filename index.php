<?php

session_start();

if (isset($_SESSION['user_id'])) {
  header('Location: /onhome');
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
    header("Location: micasa.php");
  } else {
    $message = 'Credenciales no válidas';
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OnHome</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <link rel="stylesheet" href="estilos.css">
  <script type="text/javascript" src="script.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="apple-touch-icon" sizes="57x57" href="icon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="icon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="icon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="icon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="icon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="icon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="icon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="icon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="icon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="icon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
  <link rel="manifest" href="icon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="icon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

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
        <img src="logocasa.png">
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
  <div class="acceder">
    <h1> Accede para controlar tus dispositivos  </h1>
    <br>
    <p>Al registarte, obtienes el acceso de gestionar tus dispositivos, como lámparas o puertas. Es necesario para el uso de OnHome. </p>
  </div>
</body>

</html>