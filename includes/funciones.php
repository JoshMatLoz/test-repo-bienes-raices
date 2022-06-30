<?php
require 'app.php';

function incluirTemplate( string $nombre, $inicio = false ){
 include    TEMPLATES_URL."${nombre}.php";
}

function estaAutenticado() :bool{
  session_start();
  
  if(empty($_SESSION)){
    $_SESSION['login'] = false;
  }

  $auth = $_SESSION['login'];
  
  if($auth){
    return true;
  }

    return false;
}