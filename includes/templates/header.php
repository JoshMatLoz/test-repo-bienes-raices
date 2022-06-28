<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="data:,">
  <title>Bienes Raices</title>
  <link rel="stylesheet" href="/Programacion_web/Udemy/bienesraices_inicio/build/css/app.css">
</head>
<header class="header <?php echo $inicio ?  ' inicio' :  ''; ?>"
  <div class="contenedor contenido-header">
    <div class="barra">
      <a href="/Programacion_web/Udemy/bienesraices_inicio/index.php">
        <img src="/Programacion_web/Udemy/bienesraices_inicio/build/img/logo.svg" alt="Logotipo Bienes raices">
      </a>
      <div class="mobile-menu">
        <img src="/Programacion_web/Udemy/bienesraices_inicio/build/img/barras.svg" alt="Menu de barras">
      </div>

      <div class="derecha">
        <img src="/Programacion_web/Udemy/bienesraices_inicio/build/img/dark-mode.svg" alt="Icono modo ohjcuro" class="dark-mode-boton">
        <nav class="navegacion">
          <a href="/Programacion_web/Udemy/bienesraices_inicio/nosotros.php">Nosotros</a>
          <a href="/Programacion_web/Udemy/bienesraices_inicio/anuncios.php">Anuncios</a>
          <a href="/Programacion_web/Udemy/bienesraices_inicio/blog.php"><i>Blog</i></a>
          <a href="/Programacion_web/Udemy/bienesraices_inicio/contacto.php">Contacto</a>
        </nav>
      </div>
    </div>
    <!--barra-->
  </div>
</header>