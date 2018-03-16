<?php
define ("DB_USER", "root");
define ("DB_PASSWORD", "");
define ("DB_DATABASE", "phpmyadmin");
define ("DB_HOST", "localhost");
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

$sql = "SELECT * FROM chantiers c
        INNER JOIN liaisons l ON c.chantier_id=l.chantiers_id
        INNER JOIN poste p ON p.poste_id=l.poste_id";

$result = $mysqli->query($sql);

$sql = "SELECT DISTINCT chantier_nom,chantier_nom_client FROM chantiers c
        INNER JOIN liaisons l ON c.chantier_id=l.chantiers_id
        INNER JOIN poste p ON p.poste_id=l.poste_id";
$filtre=$mysqli->query($sql);


?>
