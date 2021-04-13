<?php


 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr" >
   <head>
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

     <meta charset="utf-1">
     <title><?php $data["titulo"] ?></title>
   </head>
   <body onload="cerrar2()">
    <h2>Productos</h2>
    <div class="col-12 row justify-content-center rows">
    <div class="col-4">
        <?php include("views/producto/buscador.php"); ?>
    </div>
    </div>
     <div class="container row justify-content-center col-xl-12" ondblclick="cerrar2()">
       <div class="col-11">
         <?php include("views/producto/menu.php"); ?>
       </div>
       <div id="buscadorII" class="col-xl-12 row justify-content-center">
         <?php $dat=round(count($data["productos"])/1000,1); ?>
            <?php if ($dat > 1) {
              ?>           <?php  for ($i=(($_GET['pg']-1)*1000); $i < ($_GET['pg']*1000) ; $i++) {?>
                           <div class="card mb-3 ml-3" style="width: 16rem;" onclick="ficha('<?php echo $data["productos"][$i]['REFFABRICANTE']; ?>')">
                             <img class="card-img-top d-flex justify-content-center ml-4" src="<?php echo $data["productos"][$i]['IMAGEN']; ?>" alt="Card image cap" style="width:180px;">
                             <div class="card-body">
                               <b class="card-title"><?php echo $data["productos"][$i]['TITULO']; ?></b>
                               <p class="card-text"> <b>EAN: </b> <?php echo $data["productos"][$i]['EAN']; ?><br>
                                                     <b>Ref. Fabricante: </b> <?php echo $data["productos"][$i]['REFFABRICANTE']; ?>
                               </p>
                               <a href="#" class="btn-sm table-primary btn-outline-dark d-flex justify-content-center"> <?php
                               if ($data["productos"][$i]['PRECIO'] <= 20) {
                                 echo round($data["productos"][$i]['PRECIO'] *1.80*1.21, 2);
                               }
                               elseif ($data["productos"][$i]['PRECIO'] > 20 && $data["productos"][$i]['PRECIO'] <= 80) {
                                 echo round($data["productos"][$i]['PRECIO'] *1.40*1.21, 2);
                               }
                               elseif ($data["productos"][$i]['PRECIO'] > 80 && $data["productos"][$i]['PRECIO'] < 120) {
                                 echo round($data["productos"][$i]['PRECIO'] *1.30*1.21, 2);
                               }
                               elseif ($data["productos"][$i]['PRECIO'] >= 120) {
                                 echo round($data["productos"][$i]['PRECIO'] *1.20*1.21 ,2);
                               }
                                ?> €</b></a>
                             </div>
                           </div>
                         <?php } ?>
                         <?php
              }else {
                for ($i=0; $i < count($data["productos"]) ; $i++) {?>
                             <div class="card mb-3 ml-3" style="width: 16rem;" onclick="ficha('<?php echo $data["productos"][$i]['REFFABRICANTE']; ?>')">
                               <img class="card-img-top d-flex justify-content-center ml-4" src="<?php echo $data["productos"][$i]['IMAGEN']; ?>" alt="Card image cap" style="width:180px;">
                               <div class="card-body">
                                 <b class="card-title"><?php echo $data["productos"][$i]['TITULO']; ?></b>
                                 <p class="card-text"> <b>EAN: </b> <?php echo $data["productos"][$i]['EAN']; ?><br>
                                                       <b>Ref. Fabricante: </b> <?php echo $data["productos"][$i]['REFFABRICANTE']; ?>
                                 </p>
                                 <a href="#" class="btn-sm table-primary btn-outline-dark d-flex justify-content-center" ><b> <?php
                                 if ($data["productos"][$i]['PRECIO'] <= 20) {
                                   echo round($data["productos"][$i]['PRECIO'] *1.80*1.21, 2);
                                 }
                                 elseif ($data["productos"][$i]['PRECIO'] > 20 && $data["productos"][$i]['PRECIO'] <= 80) {
                                   echo round($data["productos"][$i]['PRECIO'] *1.40*1.21, 2);
                                 }
                                 elseif ($data["productos"][$i]['PRECIO'] > 80 && $data["productos"][$i]['PRECIO'] < 120) {
                                   echo round($data["productos"][$i]['PRECIO'] *1.30*1.21, 2);
                                 }
                                 elseif ($data["productos"][$i]['PRECIO'] >= 120) {
                                   echo round($data["productos"][$i]['PRECIO'] *1.20*1.21 ,2);
                                 }
                                  ?> €</b></a>
                               </div>
                             </div>
                           <?php }  } ?>
        <div class="col-2 text-center"><?php
          for ($i=0; $i < $dat ; $i++) {?>
            <form class="" style="float:left;" action="index.php?home=home&&pg=<?php echo $i+1; ?>" method="post">
              <input type="submit" value="<?php echo $i+1; ?>">

            </form>
          <?php }?>
        </div>
       </div>

   </div>


   </body>
 </html>

<style media="screen">
html{
  background-color: #eeeeee;
}
  table{
    border: 1px solid black;
    width: 80%;
  }
  th{
    border-left: 1px solid black;
  }
  tr{
    border: 1px solid black;
  }
  .card-text{
    font-size: 14px;
  }
  .card{
    font-size: 12px;

  }
  .card:hover{
    background-color: #f4fcff;
  }


</style>
