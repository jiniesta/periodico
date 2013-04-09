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
 
  $noticia1=new Noticia("Lorenzo gana", "Rossi no pudo con el vigente campeón en Qatar");
  echo "<h1>".$noticia1->get_titulo()."</h1>";
  echo "<p>".$noticia1->get_texto()."</p>";
  $noticia1->set_titulo("Baloncesto");
  $noticia1->set_texto("El Fuenlabrada perderá la categoría para el año que viene.");
  echo "<h1>".$noticia1->get_titulo()."</h1>";
  echo "<p>".$noticia1->get_texto()."</p>";
  
  include "comentario.php";
  $comentario1=new comentario("anonimo", "Lorenzo es una maquina","08/04/2013");
  echo "<h3>".$comentario1->get_usuario()."</h3>";
  echo "<p>".$comentario1->get_texto()."</p>";
  echo "<p>".$comentario1->get_fecha()."</p>";
  $comentario1->set_usuario("Roberto");
  $comentario1->set_texto("Marquez mejorara para la proxima");
  $comentario1->set_fecha("09/04/2013");
  echo "<h3>".$comentario1->get_usuario()."</h3>";
  echo "<p>".$comentario1->get_texto()."</p>";
  echo "<p>".$comentario1->get_fecha()."</p>";
  
  
  $noticia1 = new Noticia("Lorenzo gana", "Rossi no pudo con el vigente campeón en Qatar","Deportes");
  
  echo "<h1>".$noticia1 -> get_titulo()."</h1>";
  echo "<p>".$noticia1 -> get_texto()."</p>";
?>
</body>
</html>
