<?php
/**
 *
 */
class  Productos_Controler
{

  public function index()
  {
    require_once "models/Productos_model.php";
    $productos = new Productos_model();
    $data["titulo"]="Productos";
    $data["productos"]=$productos->get_Productos();

    require_once "views/producto/productos.php";
  }
  public function index2()
  {
    require_once "models/Productos_model.php";
    $data["titulo"]="Productos";
    $productos = new Productos_model();
    $data["productos"]=$productos->get_Productos2($_POST['buscador']);
    require_once "views/producto/productos.php";
  }
  public function index3()
  {
    require_once "models/Productos_model.php";
    $data["titulo"]="Productos.".$_GET['etiqueta'];
    $productos = new Productos_model();
    $data["productos"]=$productos->get_etiqueta($_GET['etiqueta']);
    require_once "views/producto/productos.php";
  }
  public function index4()
  {
    require_once "models/Productos_model.php";
    $data["titulo"]="Productos-".$_GET['etiquet'];
    $productos = new Productos_model();
    $data["productos"]=$productos->get_etiquet($_GET['etiquet']);
    require_once "views/producto/productos.php";
  }
  public function index5()
  {
    require_once "models/Productos_model.php";
    $data["titulo"]="Productos-".$_GET['buq'];
    $productos = new Productos_model();
    $data["productos"]=$productos->get_Producto($_GET['buq']);
    require_once "views/producto/ficha.php";
  }


}

 ?>
