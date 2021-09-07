<?php
require_once 'db.php';
function inserer($mail,$nom,$prenom,$tel,$login,$password,$etat)
{
	global $db;
	$sql=$db->prepare("INSERT into utilisateur values (null,?,?,?,?,?,?,?)");
	return $sql->execute(array($mail,$nom,$prenom,$tel,$login,$password,$etat));

}
function supprimer($id)
{
	global $db;
	$sql="DELETE from utilisateur where id=$id";
	return $db->exec($sql);
}
function find($id)
{
	global $db;
	$sql="SELECT * from utilisateur where id=$id";
	return $db->query($sql)->fetch(2);
}
function findAll()
{
	global $db;
	$sql="SELECT * from utilisateur";
	return $db->query($sql)->fetchAll(2);
}
function compter()
{
	global $db;
	$sql="SELECT count(id) as e from utilisateur";
	return $db->query($sql)->fetch(2);
}
/*function genererMat()
{
	global $db;
	$i=1;
	$compt=compter();
	$i+=intval($compt['e']);
    return "etu00".$i;
} */
function update($id,$mail,$nom,$prenom,$tel,$login,$password,$etat)
{
	  global $db;
	  $sql="UPDATE utilisateur SET
	                    mail=  '$mail',
	                    nom = '$nom',
	                    prenom = '$prenom',
	                    tel = '$tel',
	                    login = '$login',
	                    password='$password',
	                    etat    = '$etat'
	                    WHERE id= $id";	
	        return $db->exec($sql);
	}
function recherche($chaine){
	global $db;
	$sql="SELECT * from utilisateur where prenom like '%$chaine%' or nom  like '%$chaine%'";
	return $db->query($sql)->fetchAll(2);
}

// Services
  function addservice($libelleS, $idT, $etatSer, $id){
  	global $db;
  	$sql = "INSERT INTO service VALUES(null, '$libelleS', '$idT', '$etatSer', $id)";
  	 return executeSQL($sql);
  }
    function listservice(){
    	global $db;
    	$sql = "SELECT * FROM service";
    	return $db->query($sql)->fetchAll(2);
	    
    }

   function deleteservice($idS){
   	global $db;
    	$sql = "DELETE FROM service WHERE idS = $idS ";
    	return executeSQL($sql);
    } 

    function updateservice($idSer, $libelleS, $idT, $etatSer, $id){
    	global $db;
	    	$sql = "UPDATE service SET 
	    	libelleS='$libelleS', 
	    	idT='$idT', 
	    	etatSer='$etatSer',
	    	 id='$id'
	    	  WHERE  idS=$idSer " ;
    	return $db->exec($sql);
    }
    
   
       function getserviceById($id)
			 {
				global $db;
				$sql="SELECT * from service where idS=$id";
				return $db->query($sql)->fetch(2);
			   }  
    function rechercheSer($chaine){
	global $db;
	$sql="SELECT * from service where libelleS like '%$chaine%' or idT   like '%$chaine%'";
	return $db->query($sql)->fetchAll(2);
}