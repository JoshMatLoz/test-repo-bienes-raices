<?php 
  require 'includes/funciones.php';

  incluirTemplate('header');

?>

<body>
<main class="contenedor seccion contenido-centrado">
  <h1>Casa en Venta frente al Bosque</h1>
  <picture>
    <source srcset="build/img/destacada.avif" type="image/avif">
    <source srcset="build/img/destacada.webp" type="image/webp">
    <img loading="lazy" src="build/img/destacada.jpg" alt="Casa en Perrona">
  </picture>

  <div class="resumen-propiedad">
    <p class="precio">$3,000,000</p>
    <ul class="iconos-caracteristicas">
      <li>
        <img loading="lazy" src="build/img/icono_wc.svg" alt="Icono WC">
        <p>3</p>
      </li>
      <li>
        <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono Estacionamiento">
        <p>3</p>
      </li>
      <li>
        <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono Habitaciones">
        <p>4</p>
      </li>
    </ul>
    <p>
      Donec consequat vestibulum ante eget lobortis. Fusce vel facilisis felis, id malesuada ante. Sed viverra, nisl sed
      rutrum maximus, ipsum dolor pulvinar urna, quis tincidunt ipsum odio et neque. Nullam quis tellus vitae eros
      hendrerit
      mattis. Nulla quis condimentum felis, quis mollis odio. Vestibulum odio risus, posuere eu finibus sit amet, dictum
      non
      libero. Ut viverra felis lacinia est porta semper. Etiam aliquam malesuada diam vel pellentesque. Etiam ultrices
      blandit
      sem, at sagittis turpis tincidunt non. Sed et viverra urna. In hac habitasse platea dictumst. Duis sapien nisl,
      accumsan
      vel eleifend ac, efficitur sit amet lacus. Cras viverra varius turpis, vel ornare leo fermentum quis. Donec lacus
      felis,
      vulputate posuere turpis nec, elementum pellentesque ligula. Suspendisse ex mi, tincidunt a posuere ut, feugiat in
      ante.
      Ut libero sapien, dapibus sed ornare tincidunt, dapibus a nulla.
    </p>
    <p>
      Mauris ut risus ligula. Aenean in metus sit amet dolor pulvinar bibendum. Donec id vestibulum lorem, at molestie
      nulla.
      Nullam venenatis facilisis purus, sed dictum enim vestibulum ac. Mauris ac elit vitae tellus elementum pharetra a
      in
      nibh. Aliquam erat volutpat. Morbi aliquam elit quam, at fermentum odio hendrerit ac. Nam convallis, purus sit
      amet
      feugiat imperdiet, turpis ex ornare nisi, ac aliquet ligula massa nec purus. Aliquam dui felis, finibus eget mi
      id,
      fringilla elementum justo. Suspendisse vel dui dapibus, faucibus libero eget, hendrerit est. Suspendisse et sem
      non eros
      efficitur rutrum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
    </p>
    <p>
      Curabitur sit amet risus vitae ipsum imperdiet egestas. Nulla ultrices augue in ante pretium condimentum. Cras sit
      amet
      nunc libero. Maecenas sed dui ac tortor semper vestibulum sit amet ac lorem. Duis placerat pharetra nunc, a
      maximus mi.
      Suspendisse vel lacus eu arcu bibendum placerat ultricies in felis. Fusce a lacus at erat bibendum posuere.
      Phasellus
      imperdiet ante ut urna iaculis, dapibus scelerisque ipsum posuere. Mauris vehicula risus tristique pharetra
      interdum.
      Mauris porttitor augue nec consectetur consequat.
    </p>
  </div>
</main>

  <?php incluirTemplate('footer'); ?>