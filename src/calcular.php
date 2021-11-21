<?php

$entada = "";
$resultado = "";
$orden = "ascendente";
$repetidas = "";

if( isset($_GET['entrada']) ) {
  $repetidas = $_GET['repetidas'];
  $orden = $_GET['orden'];
  $entrada = $_GET['entrada'];

  $words = explode(" ", $entrada);
  
  if ($repetidas === "on") {
    $words = array_unique($words);
  }

  $orden == "ascendente" ? sort($words) : rsort($words);

  $resultado = implode(" ", $words);
}

?>