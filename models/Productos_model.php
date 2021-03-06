<?php
/**
 *
 */
class Productos_model
  {
    private $db;
    private $productos;

   public function __construct()
  {
    $this->db = Conectar::conexion();
    $this->productos = array();
  }
  public function get_Productos()
  {
    
    $sql = "select *  from PRODUCTOS";
    $resultado = $this->db->query($sql);
    $total_num_rows = $resultado->num_rows;
    if ($total_num_rows > 0) {
      while ($row = $resultado ->fetch_assoc()) {
        $this->productos[]=$row;
        }
        return $this->productos;
    }
  }

  public function get_Productos2($valor)
  {
    $sql = "select *  from PRODUCTOS where EAN like '%$valor%' OR TITULO like '%$valor%' OR REFFABRICANTE like '%$valor%'";
    $resultado = $this->db->query($sql);
    while ($row = $resultado ->fetch_assoc()) {
      $this->productos[]=$row;
    }
    return $this->productos;
  }
  public function get_etiqueta($valor)
  {
    $sql = "select *  from PRODUCTOS where CODSUBFAMILIA like '%$valor%'";
    $resultado = $this->db->query($sql);
    while ($row = $resultado ->fetch_assoc()) {
      $this->productos[]=$row;
    }
    return $this->productos;
  }
  public function get_etiquet($valor)
  {
    $sql = "select *  from PRODUCTOS where CODFAMILIA like '%$valor%'";
    $resultado = $this->db->query($sql);
    while ($row = $resultado ->fetch_assoc()) {
      $this->productos[]=$row;
    }
    return $this->productos;
  }

  public function get_producto($valor)
  {
    $sql = "select *  from PRODUCTOS where REFFABRICANTE like '%$valor%'";
    $resultado = $this->db->query($sql);
    while ($row = $resultado ->fetch_assoc()) {
      $this->productos[]=$row;
    }
    return $this->productos;
  }
}
 ?>
