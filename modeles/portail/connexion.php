<?php

function testCo($connexion){

    $pseudo = $_POST['id'];
    $mdp = $_POST['mdp'];
    $exist = verifUserExist($connexion, $pseudo);

    if ($exist == true) {
	
        if (testMdp($connexion, $pseudo, $mdp) == true) {
		
                $acces = true;
		
	    }
	
	    else{
		
		    $acces = false;
	    }
    }

    else {
	
	    $acces = false;
    }

    if ($acces == true){
	
	    header("location: index.php?p=espaceClient");
        $_SESSION['isConnected'] = TRUE;

    }

    else{
	
            $_SESSION["error"]= "C'pas bon!";
	
	

    }

}
?>


