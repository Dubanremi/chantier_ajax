<?php


require 'db.php';


  $post = $_POST;


  $sql = "INSERT INTO `liaisons` (`chantiers_id`, `poste_id`, `jan`, `fev`, `mar`, `avr`, `mai`, `juin`, `juil`, `aou`, `sep`, `oct`, `nov`, `decembre`)
VALUES ('".$post['chantier']."','".$post['poste']."','".$post['jan']."','".$post['fev']."','".$post['mar']."','".$post['avr']."','".$post['mai']."','"
.$post['juin']."','".$post['juil']."','".$post['aout']."','".$post['sept']."','".$post['oct']."','".$post['nov']."','".$post['decembre']."')";
$result =$mysqli->query($sql);


?>
