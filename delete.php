<?php


 require 'db.php';


 $id  = $_POST["id"];


 $sql = "DELETE FROM liaisons WHERE liaison_id = '".$id."'";

 $result = $mysqli->query($sql);


?>
