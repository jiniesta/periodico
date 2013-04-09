<!DOCTYPE html>
<html>
<head lang="es">
  <meta charset="utf-8">
  <title>pruebas periodico</title>
</head>
<body>
<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  include "Noticia.php";
  include "Portada.php";
  include "Seccion.php";
  
  $noticia1 = new Noticia("Lorenzo gana", "Rossi no pudo con el vigente campeón en Qatar","Deportes");
  
  echo "<h1>".$noticia1 -> get_titulo()."</h1>";
  echo "<p>".$noticia1 -> get_texto()."</p>";
?>
</body>
</html>