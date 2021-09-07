<?php 

 require_once "db.php";
require_once "function.php";
    if(isset($_POST['enregistrer'])){
		       extract($_POST);
				update($id,$mail,$nom,$prenom,$tel,$login,$password,$etat);
				header("Location:index.php");
		          }
      
     if(isset($_POST['valider'])){
		       extract($_POST);
				if(updateservice($idSer, $libelleS, $idT, $etatSer, $id))
		header("Location:index.php");
		          } else{
		          	header("Location:index.php");
		          }


 ?>