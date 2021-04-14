<html>
  <head>
 <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/producto/css.css">
    <script src="views/producto/java.js"></script>
    <link rel="icon" type="image/png" href="views/producto/icon.png"  sizes="64x64">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title><?php $data["titulo"] ?></title>
  </head>
  <body onload="cerrar2()">
    <div class="logo">
      <img src="views/producto/logo_final.png" alt="" style="width:245px; height:92.5px;">
    </div>

   <div class="mt-5 col-12 row justify-content-center rows">
   <div class="col-4">
       <?php include("views/producto/buscador.php"); ?>
   </div>
   </div>
    <div class="container row justify-content-center col-xl-12" ondblclick="cerrar2()">
      <div class="col-11">
        <?php include("views/producto/menu.php"); ?>
      </div>
       <div class="col-3 ml-3">
         <img class="col-12" src="<?php echo  $data["productos"][0]['IMAGEN']; ?>" alt="<?php echo  $data["productos"][0]['TITULO']; ?>">
       </div>
       <div class="col-7">
        <h3> <?php echo  $data["productos"][0]['TITULO']; ?></h3>
        <table>
          <tr>
            <td> <b>Referencia</b> </td>
            <td><?php echo  $data["productos"][0]['CODIGOINTERNO']; ?></td>
          </tr>
          <tr>
            <td> <b>EAN/UPC</b> </td>
            <td><?php echo  $data["productos"][0]['EAN']; ?></td>
          </tr>
          <tr>
            <td> <b>Marca</b> </td>
            <td><?php echo  $data["productos"][0]['NOMFABRICANTE']; ?></td>
          </tr>
        </table>

         <?php echo  $data["productos"][0]['FICHA'];
          $texto=strtolower(str_replace('"','',str_replace('.','-',str_replace(' ','-',$data["productos"][0]['TITULO']))));?>
         <a href="https://www.infortisa.com/buscar/<?php echo $data["productos"][0]['CODIGOINTERNO']?>/" class="btn btn-primary">Ir Infortisa</a>

       </div>
     </div>
   </body>
 </html>
