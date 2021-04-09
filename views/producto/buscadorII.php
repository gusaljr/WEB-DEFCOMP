<?php  for ($i=0; $i < 50; $i++) {?>
  <div class="card mb-3 ml-3" style="width: 16rem;" onclick="cerrar2()">
    <img class="card-img-top" src="<?php echo $data["productos"][$i]['IMAGEN']; ?>" alt="Card image cap" style="width:180px;">
    <div class="card-body">
      <b class="card-title"><?php echo $data["productos"][$i]['TITULO']; ?></b>
      <p class="card-text"> <b>EAN: </b> <?php echo $data["productos"][$i]['EAN']; ?><br>
                            <b>Ref. Fabricante: </b> <?php echo $data["productos"][$i]['REFFABRICANTE']; ?>
      </p>
      <a href="#" class="btn btn-primary"><?php
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
       ?> €</a>
    </div>
  </div>
<?php } ?>
