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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <link rel="stylesheet" href="estilos.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.4/dist/css/bulma-carousel.min.css" />
  <script type="text/javascript" src="script.js"></script>
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
  <title>Nosotros</title>


<body>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="nosotros.php">
      <img src="logocasa.png">
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
 <div class="nosotros">
      <h1>Nosotros</h1>
      <br>
      <p>
        Nuestra p??gina web gestiona una casa dom??tica (inteligente), para poder
        manejar los dispositivos desde cualquier lugar de la casa, aunque no se est?? cerca de
        los dispositivos o est?? conectado a la misma red de internet, el usuario podr??
        controlar los dispositivos siempre y cuando tenga acceso a
        la p??gina web. </br>
        </br>
        Estos ayudan al ahorro de tiempo de las personas e incluso ayudar?? a las personas que
        tengan alg??n tipo de discapacidad m??vil o alg??n tipo de problema que les impida hacer
        estas acciones de manera manual, por lo cual se les facilita con este proceso, ya que la
        p??gina podr?? seleccionar qu?? foco prender o apagar sin necesidad de hacerlo
        manualmente. Al igual el poder abrir una puerta de la misma manera o poder cerrarla sin
        ayuda manual y solo con la p??gina web se har??an estas acciones solamente iniciando
        sesi??n con su usuario y contrase??a se podr?? hacer lo mencionado anteriormente.
      </p>
      <br>

      <h2>Objetivo general</h2>
      <br>
      <p>
        Realizar una p??gina web funcional, la cual este enfocada al ??rea de las casas dom??ticas
        (inteligentes), y que esta realice sus funciones correctamente, tanto en sus aspectos funcionales
        como en el ??rea de apartado de hardware, proyecto en el cual se planea ser presentado en las fechas
        dadas las cuales son finales de noviembre, para evaluar los conocimientos que est??n siendo
        proporcionados por los docentes y la aplicaci??n que se le puede dar a estas.
      </p>
      <br>
      <h2>Objetivos espec??ficos</h2>
      <br>
      <img src="https://cdn.pixabay.com/photo/2017/09/20/16/54/smart-home-2769215_960_720.png">
      <ul>
        <li>Hacer la p??gina web con los colores seleccionados relacionados con la tecnolog??a.</li></br>
        <Li>Realizar una base de datos que se pueda comunicar con la p??gina web seg??n sus necesidades.</Li></br>
        <Li>Crear una manera de registrarse e iniciar sesi??n en la p??gina web comunicada con la base de datos.</Li></br>
        <Li>Crear el c??digo de los dispositivos que estar??n conectados a la p??gina web.</Li></br>
        <Li>Conectar la base de datos, p??gina web y el c??digo para un funcionamiento ??ptimo.</Li></br>
        <Li>Darle retoques o arreglos al c??digo, tanto en el ??rea de software, hardware y front-end, esto del proyecto
          en
          general.</Li></br>
        <Li>Agregar los elementos extra que sean necesarios a la p??gina web tanto est??ticos como funcionales para
          cumplir
          las necesidades.</Li></br>
        <Li>Presentar los avances que se tengan que se tengan en la exposici??n de medio t??rmino para tomar consejo y
          notas
          de las recomendaciones
          que se hagan para tomarlo en cuenta para la presentaci??n final de integradora.</Li></br>
      </ul>
      </p>

      <section>
        <div id="slider">
          <div class="card">
            <div class="card-image">
              <figure class="image is-16by9 is-covered">
                <img
                  src="https://alullan.es/wp-content/uploads/2019/11/domotica-en-el-hogar-beneficios-y-ventajas-1080x675.jpg"
                  alt="casa-inteligente" />
              </figure>
            </div>
            <div class="card-content slider-text ">
              <div class="is-size-5 box">
                F??cil manejo de la aplicaci??n web
              </div>
            </div>
          </div>
          <div class="card ">
            <div class="card-image">
              <figure class="image is-16by9 is-covered">
                <img src="https://s1.eestatic.com/2019/03/28/actualidad/actualidad_386724045_130499856_1024x576.jpg"
                  alt="" />
              </figure>
            </div>
            <div class="card-content slider-text ">
              <p class="is-size-5 box">
                Practicidad a la hora de gestionar los dispositivos
              </p>
            </div>
          </div>

          <div class="card">
            <div class="card-image">
              <figure class="image is-16by9 is-covered">
                <img src="https://aycrevista.com.ar/wp-content/uploads/2015/11/domotica-02.jpg"
                  alt="casa-inteligente" />
              </figure>
            </div>
            <div class="card-content slider-text ">
              <div class="is-size-5 box">
                Todo en un solo sitio web.
              </div>
            </div>
          </div>
      </section>

      <script src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/js/bulma-carousel.min.js"></script>

      <script>
        bulmaCarousel.attach('#slider', {
          slidesToScroll: 1,
          slidesToShow: 1,
          infinite: false,
          autoplay: true,
        });
      </script>
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
    </a>
    <div class="nosotros">
      <h1>Nosotros</h1>
      <br>
      <p>
        Nuestra p??gina web gestiona una casa dom??tica (inteligente), para poder
        manejar los dispositivos desde cualquier lugar de la casa, aunque no se est?? cerca de
        los dispositivos o est?? conectado a la misma red de internet, el usuario podr??
        controlar los dispositivos siempre y cuando tenga acceso a
        la p??gina web. </br>
        </br>
        Estos ayudan al ahorro de tiempo de las personas e incluso ayudar?? a las personas que
        tengan alg??n tipo de discapacidad m??vil o alg??n tipo de problema que les impida hacer
        estas acciones de manera manual, por lo cual se les facilita con este proceso, ya que la
        p??gina podr?? seleccionar qu?? foco prender o apagar sin necesidad de hacerlo
        manualmente. Al igual el poder abrir una puerta de la misma manera o poder cerrarla sin
        ayuda manual y solo con la p??gina web se har??an estas acciones solamente iniciando
        sesi??n con su usuario y contrase??a se podr?? hacer lo mencionado anteriormente.
      </p>
      <br>

      <h2>Objetivo general</h2>
      <br>
      <p>
        Realizar una p??gina web funcional, la cual este enfocada al ??rea de las casas dom??ticas
        (inteligentes), y que esta realice sus funciones correctamente, tanto en sus aspectos funcionales
        como en el ??rea de apartado de hardware, proyecto en el cual se planea ser presentado en las fechas
        dadas las cuales son finales de noviembre, para evaluar los conocimientos que est??n siendo
        proporcionados por los docentes y la aplicaci??n que se le puede dar a estas.
      </p>
      <br>
      <h2>Objetivos espec??ficos</h2>
      <br>
      <img src="https://cdn.pixabay.com/photo/2017/09/20/16/54/smart-home-2769215_960_720.png">
      <ul>
        <li>Hacer la p??gina web con los colores seleccionados relacionados con la tecnolog??a.</li></br>
        <Li>Realizar una base de datos que se pueda comunicar con la p??gina web seg??n sus necesidades.</Li></br>
        <Li>Crear una manera de registrarse e iniciar sesi??n en la p??gina web comunicada con la base de datos.</Li></br>
        <Li>Crear el c??digo de los dispositivos que estar??n conectados a la p??gina web.</Li></br>
        <Li>Conectar la base de datos, p??gina web y el c??digo para un funcionamiento ??ptimo.</Li></br>
        <Li>Darle retoques o arreglos al c??digo, tanto en el ??rea de software, hardware y front-end, esto del proyecto
          en
          general.</Li></br>
        <Li>Agregar los elementos extra que sean necesarios a la p??gina web tanto est??ticos como funcionales para
          cumplir
          las necesidades.</Li></br>
        <Li>Presentar los avances que se tengan que se tengan en la exposici??n de medio t??rmino para tomar consejo y
          notas
          de las recomendaciones
          que se hagan para tomarlo en cuenta para la presentaci??n final de integradora.</Li></br>
      </ul>
      </p>

      <section>
        <div id="slider">
          <div class="card">
            <div class="card-image">
              <figure class="image is-16by9 is-covered">
                <img
                  src="https://alullan.es/wp-content/uploads/2019/11/domotica-en-el-hogar-beneficios-y-ventajas-1080x675.jpg"
                  alt="casa-inteligente" />
              </figure>
            </div>
            <div class="card-content slider-text ">
              <div class="is-size-5 box">
                F??cil manejo de la aplicaci??n web
              </div>
            </div>
          </div>
          <div class="card ">
            <div class="card-image">
              <figure class="image is-16by9 is-covered">
                <img src="https://s1.eestatic.com/2019/03/28/actualidad/actualidad_386724045_130499856_1024x576.jpg"
                  alt="" />
              </figure>
            </div>
            <div class="card-content slider-text ">
              <p class="is-size-5 box">
                Practicidad a la hora de gestionar los dispositivos
              </p>
            </div>
          </div>

         




          <div class="card">
            <div class="card-image">
              <figure class="image is-16by9 is-covered">
                <img src="https://aycrevista.com.ar/wp-content/uploads/2015/11/domotica-02.jpg"
                  alt="casa-inteligente" />
              </figure>
            </div>
            <div class="card-content slider-text ">
              <div class="is-size-5 box">
                Todo en un solo sitio web.
              </div>
            </div>
          </div>
      </section>

      <script src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/js/bulma-carousel.min.js"></script>

      <script>
        bulmaCarousel.attach('#slider', {
          slidesToScroll: 1,
          slidesToShow: 1,
          infinite: false,
          autoplay: true,
        });
      </script>
    </div>
    <?php endif; ?>
</body>

</html>