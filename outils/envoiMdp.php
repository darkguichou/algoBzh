<?php
      
include "outilsSql.php";
include "lib.php";

$numCli = "";
$numCli = $_POST['numCli'];
$exist = verifNumCli ( $numCli );

if ($exist == true) {
	
	sendPass($numCli);
	
	
	
} else {
	
	echo "<p> Ce num�ro de client semble ne pas exister, veuillez r�essayer </p>";
	
	include "../pages/demandeMdp.php";
}

?>