<?php 

include "outilsSql.php";

$id = "jambon";
$test = "fromage";
$hash = hashMdp($test);
$co = connexionSql();
$sql = "INSERT INTO utilisateur VALUES ('".$id."', '".$hash."')";
$res = requeteExe($co, $sql);





















?>