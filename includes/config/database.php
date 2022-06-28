<?php

  function conectarDB(){
    $db = mysqli_connect('localhost', 'user', '123456', 'bienes_raices');

    if(!$db){
      echo "No se pudo conectar a la Base de Datos...";
      exit;
    }

    return $db;
  }

