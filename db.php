<?php

try{
	$db=New PDO("mysql:host=localhost;dbname=bddevopjeunepro;charset=utf8","root","");
}catch(Execption $e){
	echo " ".$e->getMessage();
}


// liste des jobs
// se connecter compte 
// enregistrer la liste des personnes 
// le formulaire de remplissage du cv
//  un cv et l'utilisateur sont liés
// les offres et utilisateurs == Association 1..N