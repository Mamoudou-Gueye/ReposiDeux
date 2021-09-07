<?php
require_once '../db.php';
require_once '../function.php';

if (isset($_GET['id']) && !empty($_GET['id'])){
	$id=intval($_GET['id']); 
	if($ok=supprimer($id)){
		header("Location:../index.php?ok=".$ok);
	}
}

