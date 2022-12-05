<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <link rel="stylesheet" href="estilos.css">
  <script type="text/javascript" src="script.js"></script>


  <title>Mi casa</title>

</head>

<body>

  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="micasa.php">
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

        <a class="navbar-item" href="micasa.php">
          Mi casa
        </a>

        <a class="navbar-item" href="historia.php">
          Historia
        </a>
      </div>



      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a class="button is-primary" href="logout.php">
              <strong>Cerrar sesión</strong>
            </a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </nav>
  <br>

  <div class="container">
    <article class="panel is-primary">
      <p class="panel-heading">
        Dispositivos disponibles
      </p>
      <br>

      <a class="botonPuerta" input id="switchExample" onclick="getinput()" type="estado" href="lamparastoggle.php">
        <img src=encendido.png>
      </a>

      <br>

      


      <div class="foco">
        <img src="foco.png">
      </div>
      <br>
      <div class="enunciados">
        <p>Foco</p>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "toringo12";
        $dbname = "pruebas";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM lamparas";


        $result = $conn->query($sql);

        while ($row = mysqli_fetch_array($result))
          echo "<p> Estado: " . $row['ESTADO'] . " </p>";
        ?>
      </div>



      <hr>


      <a class="botonPuerta" input id="switchExample" onclick="getinput()" type="estado" href="puertastoggle.php">
        <img src="candao1.png">
      </a>
      <br>

      <div class="puerta">
        <img src="puerta1.png">
      </div>
      
      <br>
      <div class="enunciados">
        <p>Puerta</p>
        <?php
       $servername = "localhost";
       $username = "root";
       $password = "toringo12";
       $dbname = "pruebas";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM puertas";


        $result = $conn->query($sql);

        while ($row = mysqli_fetch_array($result))
          echo "<p> Estado:" . $row['ESTADO'] . " </p>";
        ?>
      </div>
        <br>
      
    </article>
  </div>
</body>

</html>
