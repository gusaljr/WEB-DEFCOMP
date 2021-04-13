<?php
require_once "config/database.php";
require_once "controllers/Productos.php";

  if (isset($_GET['home'])) {
    $control = new Productos_Controler();
    $control ->index();
  }

  elseif (isset($_GET['busq'])) {
    $control = new Productos_Controler();
    $control ->index2();
  }
  elseif (isset($_GET['etiqueta'])) {
    $control = new Productos_Controler();
    $control ->index3();
  }
  elseif (isset($_GET['etiquet'])) {
    $control = new Productos_Controler();
    $control ->index4();
  }
  elseif (isset($_GET['buq'])) {
    $control = new Productos_Controler();
    $control ->index5();
  }else{
    header('Location: index.php?home=home&&pg=1');
    
  }
 ?>
