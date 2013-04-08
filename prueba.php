<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  include "Noticia.php";
  $noticia1=new Noticia("Lorenzo gana", "Rossi no pudo con el vigente campeón en Qatar");
  echo "<h1>".$noticia1->get_titulo()."</h1>";
  echo "<p>".$noticia1->get_texto()."</p>";
  $noticia1->set_titulo("Baloncesto");
  $noticia1->set_texto("El Fuenlabrada perderá la categoría para el año que viene.");
  echo "<h1>".$noticia1->get_titulo()."</h1>";
  echo "<p>".$noticia1->get_texto()."</p>";
?>
