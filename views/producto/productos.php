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
       <div id="buscadorII" class="col-xl-12 row justify-content-center">
         <?php $dat=round(count($data["productos"])/1000,1); ?>
            <?php if ($dat > 1) {
              ?>           <?php  for ($i=(($_GET['pg']-1)*1000); $i < ($_GET['pg']*1000) ; $i++) {?>
                <div class="card mb-3 ml-3" style="width: 16rem;" >
                  <img class="card-img-top d-flex justify-content-center ml-4" src="<?php echo $data["productos"][$i]['IMAGEN']; ?>" alt="Card image cap" style="width:180px;">
                  <div class="card-body">
                    <b class="card-title"> <a onclick="ficha('<?php echo $data["productos"][$i]['REFFABRICANTE']; ?>')"><?php echo $data["productos"][$i]['TITULO']; ?></a></b>
                    <p class="card-text"> <b>EAN: </b> <?php echo $data["productos"][$i]['EAN']; ?><br>
                                          <b>Ref. Fabricante: </b> <?php echo $data["productos"][$i]['REFFABRICANTE']; ?>
                    </p>
                    <a href="#" class="price d-flex justify-content-center" onclick="checkCookie('<?php echo $data["productos"][$i]['REFFABRICANTE']; ?>','<?php echo $data["productos"][$i]['TITULO']; ?>','<?php echo $data["productos"][$i]['IMAGEN']; ?>','<?php echo $data["productos"][$i]['PRECIO']; ?>','1')" ><b><?php
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
              <?php } }
              else {
                for ($i=0; $i < count($data["productos"]) ; $i++) {?>
                             <div class="card mb-3 ml-3" style="width: 16rem;" >
                               <img class="card-img-top d-flex justify-content-center ml-4" src="<?php echo $data["productos"][$i]['IMAGEN']; ?>" alt="Card image cap" style="width:180px;">
                               <div class="card-body">
                                 <b class="card-title"> <a onclick="ficha('<?php echo $data["productos"][$i]['REFFABRICANTE']; ?>')"><?php echo $data["productos"][$i]['TITULO']; ?></a></b>
                                 <p class="card-text"> <b>EAN: </b> <?php echo $data["productos"][$i]['EAN']; ?><br>
                                                       <b>Ref. Fabricante: </b> <?php echo $data["productos"][$i]['REFFABRICANTE']; ?>
                                 </p>
                                 <a href="#" class="price d-flex justify-content-center" onclick="checkCookie('<?php echo $data["productos"][$i]['REFFABRICANTE']; ?>','<?php echo $data["productos"][$i]['TITULO']; ?>','<?php echo $data["productos"][$i]['IMAGEN']; ?>','<?php echo $data["productos"][$i]['PRECIO']; ?>','1')" ><b> <?php
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
          <button onclick="checkCookie('34','teclado logitet','34.6','7')" type="button" name="button">verCookies</button>
        </div>
       </div>

   </div>


   </body>
 </html>
