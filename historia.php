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
                <strong>Cerrar Sesi??n</strong>
              </a>
            </div>
          </div>
        </div>
      </nav>

      <div class="historia">
        <h1>Historia y evoluci??n de la dom??tica</h1>
        <br>
        <p>
            A d??a actual la dom??tica est?? presente en la mayor parte de domicilios. A partir de una Smart TV hasta viviendas enteramente automatizadas, el abanico de posibilidades es en realidad largo. No obstante, la procedencia de esta tecnolog??a es much??simo m??s humilde. Hoy observaremos c??mo nace y cu??l fue la evoluci??n de la dom??tica en todo el ??ltimo siglo.
          </br>
          </br>
        </p>
        

        <h2>??Cu??ndo aparecen los primeros electrodom??sticos?</h2>
        <br>
        <p>
          Los primeros electrodom??sticos llegan a comienzos del siglo XX, precisamente en el a??o 1903. De esta forma puesto que, por primera ocasi??n, las m??quinas realizan las labores del hogar.
          Sin embargo, a fines del siglo IXX ya exist??an m??quinas capaces de hacer ciertos trabajos diarios. Ejemplificando, aunque eran pocas, ya exist??an las primeras aspiradoras. Estas funcionaban a motor de combustible y eran en verdad engorrosas. Muchas estaban destinadas al uso industrial o para viviendas de gigantes se??ores o nobles.
          Es por esa raz??n que los electrodom??sticos fueron revolucionarios: eran much??simo m??s manejables, requer??an varios menos recursos para lograr usarse y empezaban a ser objetos asequibles para una familia media.
        </p>
        <br>
        <h2>Cronolog??a de los primeros electrodom??sticos</h2>
        <br>
        <p>
          No fue hasta 1903 cuando se comenzaron a expandir los electrodom??sticos. Su caracter??stica diferencial es que son m??quinas que funcionan con electricidad. Esto las hac??a mucho m??s manejables, sencillas y pr??cticas, de ah?? su ??xito y expansi??n.
        </p>
        <br>
         <h2>Los electrodom??sticos en la primera d??cada del siglo XX</h2>
         <br>
         <p>
            1903: El primer electrodom??stico en llegar fue la plancha de ropa ligera el??ctrica. Hasta el momento se utilizaban pesadas planchas de hierro que se llenaban con agua hirviendo o se calentaban mediante otros medios. Este peque??o avance supuso acomodar la vida de las personas ya que ahorraba mucho tiempo.
             <br>
            1907: La aspiradora a motor es sustituida por la aspiradora el??ctrica. Aunque no todo el mundo pod??a permitirse una, plant?? las bases para la limpieza del hogar actual.
             <br>
            1909: Llega la tostadora el??ctrica, un aparato que supuso dejar atr??s los fuegos para agilizar una tarea tan cotidiana como hacerse unas tostadas.
          </p>
      
        <br>
        <h2>Los electrodom??sticos m??s importantes del xiglo XX</h2>
        <br>
        <p>
          <img src="https://assets.sutori.com/user-uploads/image/dad72d5c-3d0c-40ce-898a-97a5332929c0/c5b21e6a625b60637846b87ed524b362.jpeg" alt="electrodomesticos">
          <li>1913: Durante este a??o se produjeron dos peque??as revoluciones. Por un lado llega la nevera el??ctrica dom??stica, que permite, por primera vez, refrigerar alimentos sin gran complicaci??n. Hasta ahora se utilizaban cuevas o cavidades para almacenar ciertos productos. Por otro lado, tambi??n llega el primer lavavajillas, algo in??dito hasta la fecha.</li>
          <li>1927: Aparecen las primeras trituradoras dom??sticas para el desag??e. Su uso se populariz?? tanto en Estados Unidos que hoy en d??a es dif??cil no encontrar este aparato en alguna cocina del pa??s americano.</li>
          <li>1930: Ya durante la d??cada de los 30 los electrodom??sticos empezaban a abundar en los hogares de clase media estadounidense. En este sentido, llega la primera lavadora capaz de limpiar, enjuagar y centrifugar, todo en una sola m??quina. Esta s?? fue una revoluci??n a gran escala ya que limpiar la ropa siempre hab??a sido una tarea dura y que requer??a mucho tiempo y esfuerzo.</li>
          <li> 1935: Casi de manera natural, a la llegada de la lavadora multiusos le sucede la aparici??n de las primeras secadoras dom??sticas.</li>
          <li> 1951: Con casi medio siglo de evoluci??n, los electrodom??sticos se especializaban cada vez en hacer todo tipo de tareas. Fue durante este a??o cuando se inventa y populariza la cafetera el??ctrica. As?? pues el alcance de los electrodom??sticos sale de casa y empieza a expandirse en oficinas, restaurantes, negocios, etc.</li>
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
                      Iniciar sesi??n
                    </a>
            </div>
          </div>
        </div>
      </nav>

      <div class="historia">
        <h1>Historia y evoluci??n de la dom??tica</h1>
        <br>
        <p>
            A d??a actual la dom??tica est?? presente en la mayor parte de domicilios. A partir de una Smart TV hasta viviendas enteramente automatizadas, el abanico de posibilidades es en realidad largo. No obstante, la procedencia de esta tecnolog??a es much??simo m??s humilde. Hoy observaremos c??mo nace y cu??l fue la evoluci??n de la dom??tica en todo el ??ltimo siglo.
          </br>
          </br>
        </p>
        

        <h2>??Cu??ndo aparecen los primeros electrodom??sticos?</h2>
        <br>
        <p>
          Los primeros electrodom??sticos llegan a comienzos del siglo XX, precisamente en el a??o 1903. De esta forma puesto que, por primera ocasi??n, las m??quinas realizan las labores del hogar.
          Sin embargo, a fines del siglo IXX ya exist??an m??quinas capaces de hacer ciertos trabajos diarios. Ejemplificando, aunque eran pocas, ya exist??an las primeras aspiradoras. Estas funcionaban a motor de combustible y eran en verdad engorrosas. Muchas estaban destinadas al uso industrial o para viviendas de gigantes se??ores o nobles.
          Es por esa raz??n que los electrodom??sticos fueron revolucionarios: eran much??simo m??s manejables, requer??an varios menos recursos para lograr usarse y empezaban a ser objetos asequibles para una familia media.
        </p>
        <br>
        <h2>Cronolog??a de los primeros electrodom??sticos</h2>
        <br>
        <p>
          No fue hasta 1903 cuando se comenzaron a expandir los electrodom??sticos. Su caracter??stica diferencial es que son m??quinas que funcionan con electricidad. Esto las hac??a mucho m??s manejables, sencillas y pr??cticas, de ah?? su ??xito y expansi??n.
        </p>
        <br>
         <h2>Los electrodom??sticos en la primera d??cada del siglo XX</h2>
         <br>
         <p>
            1903: El primer electrodom??stico en llegar fue la plancha de ropa ligera el??ctrica. Hasta el momento se utilizaban pesadas planchas de hierro que se llenaban con agua hirviendo o se calentaban mediante otros medios. Este peque??o avance supuso acomodar la vida de las personas ya que ahorraba mucho tiempo.
             <br>
            1907: La aspiradora a motor es sustituida por la aspiradora el??ctrica. Aunque no todo el mundo pod??a permitirse una, plant?? las bases para la limpieza del hogar actual.
             <br>
            1909: Llega la tostadora el??ctrica, un aparato que supuso dejar atr??s los fuegos para agilizar una tarea tan cotidiana como hacerse unas tostadas.
          </p>
      
        <br>
        <h2>Los electrodom??sticos m??s importantes del xiglo XX</h2>
        <br>
        <p>
          <img src="https://assets.sutori.com/user-uploads/image/dad72d5c-3d0c-40ce-898a-97a5332929c0/c5b21e6a625b60637846b87ed524b362.jpeg" alt="electrodomesticos">
          <li>1913: Durante este a??o se produjeron dos peque??as revoluciones. Por un lado llega la nevera el??ctrica dom??stica, que permite, por primera vez, refrigerar alimentos sin gran complicaci??n. Hasta ahora se utilizaban cuevas o cavidades para almacenar ciertos productos. Por otro lado, tambi??n llega el primer lavavajillas, algo in??dito hasta la fecha.</li>
          <li>1927: Aparecen las primeras trituradoras dom??sticas para el desag??e. Su uso se populariz?? tanto en Estados Unidos que hoy en d??a es dif??cil no encontrar este aparato en alguna cocina del pa??s americano.</li>
          <li>1930: Ya durante la d??cada de los 30 los electrodom??sticos empezaban a abundar en los hogares de clase media estadounidense. En este sentido, llega la primera lavadora capaz de limpiar, enjuagar y centrifugar, todo en una sola m??quina. Esta s?? fue una revoluci??n a gran escala ya que limpiar la ropa siempre hab??a sido una tarea dura y que requer??a mucho tiempo y esfuerzo.</li>
          <li> 1935: Casi de manera natural, a la llegada de la lavadora multiusos le sucede la aparici??n de las primeras secadoras dom??sticas.</li>
          <li> 1951: Con casi medio siglo de evoluci??n, los electrodom??sticos se especializaban cada vez en hacer todo tipo de tareas. Fue durante este a??o cuando se inventa y populariza la cafetera el??ctrica. As?? pues el alcance de los electrodom??sticos sale de casa y empieza a expandirse en oficinas, restaurantes, negocios, etc.</li>
        </p>
      </div>
    <?php endif; ?>
</body>
</html>
