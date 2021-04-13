<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
    <script type="text/javascript">

    function ficha(ref){
    location.replace("index.php?buq=" + ref);
    }

    function cerrar2() {
      document.getElementById("menuS1").style.display = "none";
      document.getElementById("menuS2").style.display = "none";
      document.getElementById("menuS3").style.display = "none";
      document.getElementById("menuS4").style.display = "none";
      document.getElementById("menuS5").style.display = "none";
      document.getElementById("menuS6").style.display = "none";
      document.getElementById("menuS7").style.display = "none";
      document.getElementById("menuS8").style.display = "none";
      document.getElementById("menuS9").style.display = "none";
      document.getElementById("menuS10").style.display = "none";
      document.getElementById("menuS110").style.display = "none";
    }
    function cerrar() {
      document.getElementById("menuS1").style.display = "none";
      document.getElementById("menuS2").style.display = "none";
      document.getElementById("menuS3").style.display = "none";
      document.getElementById("menuS4").style.display = "none";
      document.getElementById("menuS5").style.display = "none";
      document.getElementById("menuS6").style.display = "none";
      document.getElementById("menuS7").style.display = "none";
      document.getElementById("menuS8").style.display = "none";
      document.getElementById("menuS9").style.display = "none";
      document.getElementById("menuS10").style.display = "none";
      document.getElementById("menuS110").style.display = "none";

      document.getElementById("menuS11").style.backgroundColor="#F4F4F4";
      document.getElementById("menuS11").style.color="black";

      document.getElementById("menuS22").style.backgroundColor="#F4F4F4";
      document.getElementById("menuS22").style.color="black";

      document.getElementById("menuS33").style.backgroundColor="#F4F4F4";
      document.getElementById("menuS33").style.color="black";

      document.getElementById("menuS44").style.backgroundColor="#F4F4F4";
      document.getElementById("menuS44").style.color="black";

      document.getElementById("menuS55").style.backgroundColor="#F4F4F4";
      document.getElementById("menuS55").style.color="black";

      document.getElementById("menuS66").style.backgroundColor="#F4F4F4";
      document.getElementById("menuS66").style.color="black";

      document.getElementById("menuS77").style.backgroundColor="#F4F4F4";
      document.getElementById("menuS77").style.color="black";

      document.getElementById("menuS88").style.backgroundColor="#F4F4F4";
      document.getElementById("menuS88").style.color="black";

      document.getElementById("menuS99").style.backgroundColor="#F4F4F4";
      document.getElementById("menuS99").style.color="black";

      document.getElementById("menuS100").style.backgroundColor="#F4F4F4";
      document.getElementById("menuS100").style.color="black";

      document.getElementById("menuS1110").style.backgroundColor="#F4F4F4";
      document.getElementById("menuS1110").style.color="black";
    }
    function menuS1() {
      cerrar();
      document.getElementById("menuS1").style.display = "block";
      document.getElementById("menuS11").style.backgroundColor="#38A7DE";
      document.getElementById("menuS11").style.color="#ffffff";
    }
    function menuS2() {
      cerrar();
      document.getElementById("menuS2").style.display = "block";
      document.getElementById("menuS22").style.backgroundColor="#38A7DE";
      document.getElementById("menuS22").style.color="#ffffff";
    }
    function menuS3() {
      cerrar();
      document.getElementById("menuS3").style.display = "block";
      document.getElementById("menuS33").style.backgroundColor="#38A7DE";
      document.getElementById("menuS33").style.color="#ffffff";
    }
    function menuS4() {
      cerrar();
      document.getElementById("menuS4").style.display = "block";
      document.getElementById("menuS44").style.backgroundColor="#38A7DE";
      document.getElementById("menuS44").style.color="#ffffff";
    }
    function menuS5() {
      cerrar();
      document.getElementById("menuS5").style.display = "block";
      document.getElementById("menuS55").style.backgroundColor="#38A7DE";
      document.getElementById("menuS55").style.color="#ffffff";
    }
    function menuS6() {
      cerrar();
      document.getElementById("menuS6").style.display = "block";
      document.getElementById("menuS66").style.backgroundColor="#38A7DE";
      document.getElementById("menuS66").style.color="#ffffff";
    }
    function menuS7() {
      cerrar();
      document.getElementById("menuS7").style.display = "block";
      document.getElementById("menuS77").style.backgroundColor="#38A7DE";
      document.getElementById("menuS77").style.color="#ffffff";
    }
    function menuS8() {
      cerrar();
      document.getElementById("menuS8").style.display = "block";
      document.getElementById("menuS88").style.backgroundColor="#38A7DE";
      document.getElementById("menuS88").style.color="#ffffff";
    }
    function menuS9() {
      cerrar();
      document.getElementById("menuS9").style.display = "block";
      document.getElementById("menuS99").style.backgroundColor="#38A7DE";
      document.getElementById("menuS99").style.color="#ffffff";
    }
    function menuS10() {
      cerrar();
      document.getElementById("menuS10").style.display = "block";
      document.getElementById("menuS100").style.backgroundColor="#38A7DE";
      document.getElementById("menuS100").style.color="#ffffff";
    }
    function menuS11() {
      cerrar();
      document.getElementById("menuS110").style.display = "block";
      document.getElementById("menuS1110").style.backgroundColor="#38A7DE";
      document.getElementById("menuS1110").style.color="#ffffff";
    }
    </script>
   <title><?php $data["titulo"] ?></title>
 </head>
   <body ondblclick="cerrar2()">
     <div class="col-12 row justify-content-center rows">
     <div class="col-4">
         <?php include("views/producto/buscador.php"); ?>
     </div>
     <div class="col-11">
       <?php include("views/producto/menu.php"); ?>
     </div>
     
     <div class="col-12 container row ">
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
