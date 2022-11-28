<?php

require 'database.php';

$message = '';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':email', $_POST['email']);
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $stmt->bindParam(':password', $password);

  if ($stmt->execute()) {
    $message = 'Successfully created new user';
  } else {
    $message = 'Sorry there must have been an issue creating your account';
  }
}
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
<link rel="stylesheet" href="estilos.css">
<script type="text/javascript" src="script.js"></script>
<link rel="stylesheet" href="assets/css/style.css">


<title>Registro</title>
</head>

<body>

  <?php if (!empty($message)): ?>
  <p>
    <<= $message ?>
  </p>
  <?php endif; ?>
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
      
          <h1>Registro</h1>
          <form action="signup.php" method="POST">
            <input name="email" type="text" placeholder="Ingresa tu email">
            <input name="password" type="password" placeholder="Ingresa tu contraseña">
            <input name="confirm_password" type="password" placeholder="Confirma tu contraseña">
            <input type="submit" value="Registrar">
          </form>
  
       
      </div>
    </div>
  </div>
  <br>

</body>

</html>