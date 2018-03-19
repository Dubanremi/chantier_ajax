<?php


  require 'db.php';


  $id  = $_POST["id"];
  $post = $_POST;

  $sql = "UPDATE liaisons SET chantiers_id = '".$post['chantier']."',poste_id = '".$post['poste']."',jan = '".$post['jan']."',fev = '".$post['fev']."'
  mar = '".$post['mar']."',avr = '".$post['avr']."',mai = '".$post['mai']."',juin = '".$post['juin']."',juil = '".$post['juil']."',aou = '".$post['aout']."'
  sep = '".$post['sept']."',oct = '".$post['oct']."',nov = '".$post['nov']."',decembre = '".$post['decembre']."' WHERE  liaison_id = '".$id."'";

  // "UPDATE liaisons SET chantier_id = '".$post['chantier']."'
  //   ,poste_id = '".$post['poste']."',jan = '".$post['jan']."',fev = '".$post['fev']."',mar = '".$post['mar']."',avr = '".$post['avr']."',mai = '".$post['mai']."'
  //   ,juin = '".$post['juin']."',juil = '".$post['juil']."',aou = '".$post['aout']."',sep = '".$post['sept']."',oct = '".$post['oct']."',nov = '".$post['nov']."'
  //   ,decembre = '".$post['decembre']."'
  //   WHERE liaison_id = '".$id."'";


  $result = $mysqli->query($sql);
  ?>
