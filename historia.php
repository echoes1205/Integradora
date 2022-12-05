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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.4/dist/css/bulma-carousel.min.css"/>
    <link rel="apple-touch-icon" sizes="57x57" href="icon/apple-icon-57x57.png">
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
    
    <script type="text/javascript" src="script.js"></script>
    
    <title>Historia</title>
    
</head>
<body>
      <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="historia.php">
            <img src="logocasa.png">
          </a>
    <?php if(!empty($user)): ?>      
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
                <strong>Cerrar Sesión</strong>
              </a>
            </div>
          </div>
        </div>
      </nav>

      <div class="historia">
        <h1>Historia y evolución de la domótica</h1>
        <br>
        <p>
            A día actual la domótica está presente en la mayor parte de domicilios. A partir de una Smart TV hasta viviendas enteramente automatizadas, el abanico de posibilidades es en realidad largo. No obstante, la procedencia de esta tecnología es muchísimo más humilde. Hoy observaremos cómo nace y cuál fue la evolución de la domótica en todo el último siglo.
          </br>
          </br>
        </p>
        

        <h2>¿Cuándo aparecen los primeros electrodomésticos?</h2>
        <br>
        <p>
          Los primeros electrodomésticos llegan a comienzos del siglo XX, precisamente en el año 1903. De esta forma puesto que, por primera ocasión, las máquinas realizan las labores del hogar.
          Sin embargo, a fines del siglo IXX ya existían máquinas capaces de hacer ciertos trabajos diarios. Ejemplificando, aunque eran pocas, ya existían las primeras aspiradoras. Estas funcionaban a motor de combustible y eran en verdad engorrosas. Muchas estaban destinadas al uso industrial o para viviendas de gigantes señores o nobles.
          Es por esa razón que los electrodomésticos fueron revolucionarios: eran muchísimo más manejables, requerían varios menos recursos para lograr usarse y empezaban a ser objetos asequibles para una familia media.
        </p>
        <br>
        <h2>Cronología de los primeros electrodomésticos</h2>
        <br>
        <p>
          No fue hasta 1903 cuando se comenzaron a expandir los electrodomésticos. Su característica diferencial es que son máquinas que funcionan con electricidad. Esto las hacía mucho más manejables, sencillas y prácticas, de ahí su éxito y expansión.
        </p>
        <br>
         <h2>Los electrodomésticos en la primera década del siglo XX</h2>
         <br>
         <p>
            1903: El primer electrodoméstico en llegar fue la plancha de ropa ligera eléctrica. Hasta el momento se utilizaban pesadas planchas de hierro que se llenaban con agua hirviendo o se calentaban mediante otros medios. Este pequeño avance supuso acomodar la vida de las personas ya que ahorraba mucho tiempo.
             <br>
            1907: La aspiradora a motor es sustituida por la aspiradora eléctrica. Aunque no todo el mundo podía permitirse una, plantó las bases para la limpieza del hogar actual.
             <br>
            1909: Llega la tostadora eléctrica, un aparato que supuso dejar atrás los fuegos para agilizar una tarea tan cotidiana como hacerse unas tostadas.
          </p>
      
        <br>
        <h2>Los electrodomésticos más importantes del xiglo XX</h2>
        <br>
        <p>
          <img src="https://assets.sutori.com/user-uploads/image/dad72d5c-3d0c-40ce-898a-97a5332929c0/c5b21e6a625b60637846b87ed524b362.jpeg" alt="electrodomesticos">
          <li>1913: Durante este año se produjeron dos pequeñas revoluciones. Por un lado llega la nevera eléctrica doméstica, que permite, por primera vez, refrigerar alimentos sin gran complicación. Hasta ahora se utilizaban cuevas o cavidades para almacenar ciertos productos. Por otro lado, también llega el primer lavavajillas, algo inédito hasta la fecha.</li>
          <li>1927: Aparecen las primeras trituradoras domésticas para el desagüe. Su uso se popularizó tanto en Estados Unidos que hoy en día es difícil no encontrar este aparato en alguna cocina del país americano.</li>
          <li>1930: Ya durante la década de los 30 los electrodomésticos empezaban a abundar en los hogares de clase media estadounidense. En este sentido, llega la primera lavadora capaz de limpiar, enjuagar y centrifugar, todo en una sola máquina. Esta sí fue una revolución a gran escala ya que limpiar la ropa siempre había sido una tarea dura y que requería mucho tiempo y esfuerzo.</li>
          <li> 1935: Casi de manera natural, a la llegada de la lavadora multiusos le sucede la aparición de las primeras secadoras domésticas.</li>
          <li> 1951: Con casi medio siglo de evolución, los electrodomésticos se especializaban cada vez en hacer todo tipo de tareas. Fue durante este año cuando se inventa y populariza la cafetera eléctrica. Así pues el alcance de los electrodomésticos sale de casa y empieza a expandirse en oficinas, restaurantes, negocios, etc.</li>
        </p>
      </div>
    <?php else: ?>
      
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
      </nav>

      <div class="historia">
        <h1>Historia y evolución de la domótica</h1>
        <br>
        <p>
            A día actual la domótica está presente en la mayor parte de domicilios. A partir de una Smart TV hasta viviendas enteramente automatizadas, el abanico de posibilidades es en realidad largo. No obstante, la procedencia de esta tecnología es muchísimo más humilde. Hoy observaremos cómo nace y cuál fue la evolución de la domótica en todo el último siglo.
          </br>
          </br>
        </p>
        

        <h2>¿Cuándo aparecen los primeros electrodomésticos?</h2>
        <br>
        <p>
          Los primeros electrodomésticos llegan a comienzos del siglo XX, precisamente en el año 1903. De esta forma puesto que, por primera ocasión, las máquinas realizan las labores del hogar.
          Sin embargo, a fines del siglo IXX ya existían máquinas capaces de hacer ciertos trabajos diarios. Ejemplificando, aunque eran pocas, ya existían las primeras aspiradoras. Estas funcionaban a motor de combustible y eran en verdad engorrosas. Muchas estaban destinadas al uso industrial o para viviendas de gigantes señores o nobles.
          Es por esa razón que los electrodomésticos fueron revolucionarios: eran muchísimo más manejables, requerían varios menos recursos para lograr usarse y empezaban a ser objetos asequibles para una familia media.
        </p>
        <br>
        <h2>Cronología de los primeros electrodomésticos</h2>
        <br>
        <p>
          No fue hasta 1903 cuando se comenzaron a expandir los electrodomésticos. Su característica diferencial es que son máquinas que funcionan con electricidad. Esto las hacía mucho más manejables, sencillas y prácticas, de ahí su éxito y expansión.
        </p>
        <br>
         <h2>Los electrodomésticos en la primera década del siglo XX</h2>
         <br>
         <p>
            1903: El primer electrodoméstico en llegar fue la plancha de ropa ligera eléctrica. Hasta el momento se utilizaban pesadas planchas de hierro que se llenaban con agua hirviendo o se calentaban mediante otros medios. Este pequeño avance supuso acomodar la vida de las personas ya que ahorraba mucho tiempo.
             <br>
            1907: La aspiradora a motor es sustituida por la aspiradora eléctrica. Aunque no todo el mundo podía permitirse una, plantó las bases para la limpieza del hogar actual.
             <br>
            1909: Llega la tostadora eléctrica, un aparato que supuso dejar atrás los fuegos para agilizar una tarea tan cotidiana como hacerse unas tostadas.
          </p>
      
        <br>
        <h2>Los electrodomésticos más importantes del xiglo XX</h2>
        <br>
        <p>
          <img src="https://assets.sutori.com/user-uploads/image/dad72d5c-3d0c-40ce-898a-97a5332929c0/c5b21e6a625b60637846b87ed524b362.jpeg" alt="electrodomesticos">
          <li>1913: Durante este año se produjeron dos pequeñas revoluciones. Por un lado llega la nevera eléctrica doméstica, que permite, por primera vez, refrigerar alimentos sin gran complicación. Hasta ahora se utilizaban cuevas o cavidades para almacenar ciertos productos. Por otro lado, también llega el primer lavavajillas, algo inédito hasta la fecha.</li>
          <li>1927: Aparecen las primeras trituradoras domésticas para el desagüe. Su uso se popularizó tanto en Estados Unidos que hoy en día es difícil no encontrar este aparato en alguna cocina del país americano.</li>
          <li>1930: Ya durante la década de los 30 los electrodomésticos empezaban a abundar en los hogares de clase media estadounidense. En este sentido, llega la primera lavadora capaz de limpiar, enjuagar y centrifugar, todo en una sola máquina. Esta sí fue una revolución a gran escala ya que limpiar la ropa siempre había sido una tarea dura y que requería mucho tiempo y esfuerzo.</li>
          <li> 1935: Casi de manera natural, a la llegada de la lavadora multiusos le sucede la aparición de las primeras secadoras domésticas.</li>
          <li> 1951: Con casi medio siglo de evolución, los electrodomésticos se especializaban cada vez en hacer todo tipo de tareas. Fue durante este año cuando se inventa y populariza la cafetera eléctrica. Así pues el alcance de los electrodomésticos sale de casa y empieza a expandirse en oficinas, restaurantes, negocios, etc.</li>
        </p>
      </div>
    <?php endif; ?>
</body>
</html>
