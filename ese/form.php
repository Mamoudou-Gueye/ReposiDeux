<?php
require_once "../db.php";
require_once "../function.php";
//$matricule=genererMat();
if(isset($_POST['mail']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['tel']) && isset($_POST['login']) && isset($_POST['password']) && isset($_POST['etat']) ){
	if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['tel']) && !empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['etat']) ){
	extract($_POST);
	if($ok=inserer("$mail","$nom","$prenom","$tel","$login","$password","$etat"));
	header("Refresh:0");
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Formulaire d'ajout d'un Utilisateur</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<title>About Us - About Us | Jeunes Pro - Site Vitrine</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Place your description here" />
<meta name="keywords" content="put, your, keyword, here" />
<meta name="author" content="Templates.com - website templates provider" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Myriad_Pro_400.font.js" type="text/javascript"></script>
<script src="js/Myriad_Pro_600.font.js" type="text/javascript"></script>
<script src="js/NewsGoth_BT_400.font.js" type="text/javascript"></script>
<script src="js/NewsGoth_BT_700.font.js" type="text/javascript"></script>
<script src="js/NewsGoth_Dm_BT_400.font.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<!--[if lt IE 7]>
	<script type="text/javascript" src="js/ie_png.js"></script>
	<script type="text/javascript">
		ie_png.fix('.png, #header .row-2 ul li a, .extra img, #search-form a, #search-form a em, #login-form .field1 a, #login-form .field1 a em, #login-form .field1 a b');
	</script>
	<link href="ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
	<div class="container" id="pere">
				<div class="container col-4 mt-5" id="fils">
					<form method="post" action="">
					<fieldset>
						<legend id="titre" style="text-decoration: underline;font-weight: bold">Formulaire d'inscription</legend>
						<?php 
						if(isset($ok) && !empty($ok))
							echo"<span class='alert-success'>Enregistrer avec success!</span>"; ?>
						<div class="form-group">
							<label class="form-label" for="nom">Mail</label>
							<input type="text" name="mail" class="form-control" required="">
						</div>	
						<div class="form-group">
							<label class="form-label" for="nom">Nom</label>
							<input type="text" name="nom" class="form-control" required="">
						</div>	
						<div class="form-group">
							<label class="form-label" for="prenom">Prenom</label>
							<input type="text" name="prenom" class="form-control" required="">
						</div>	
						<div class="form-group">
							<label class="form-label" for="tel">Telephone</label>
							<input type="text" name="tel" class="form-control" required="">
						</div>
						<div class="form-group">
							<label class="form-label" for="login">Login</label>
							<input type="text" name="login" class="form-control" required="">
						</div>
						<div class="form-group">
							<label class="form-label" for="password">Password</label>
							<input type="password" name="password" class="form-control" required="">
						</div>
						<div class="form-group">
							<label class="form-label" for="etat">Etat</label>
							<input type="text" name="etat" class="form-control" required="">
						</div>	
						<div class="form-group">
							<input type="submit" value="enregister" name="enregister" class="btn btn-outline-primary">
							<input type="reset" value="annuler" name="annuler" class="btn btn-outline-danger">
						</div>	
					</fieldset>
			</form>	
			<a href="../index.php#portfolio"><button class="form-control btn btn-outline-primary mb-5" >Liste des utilisateurs</button></a>
			</div>
	</div>
	<script type="text/javascript" src="script.js"></script>

	<!-- FOOTER -->
	<div id="footer">
		<div class="footer-nav">
			<div class="left">
				<ul>
					<li><a href="../index.php">Accueil </a></li>
					<li><a href="../index.php#portfolio"> Entreprise</a></li>
					<li><a href="../index.php#services">Service</a></li>
					<li><a href="../index.php#contact">Nous contacter </a></li>
				</ul>
			</div>
		</div>
		<div class="bottom">Copyright - Taper votre nom ici<br />
			<a rel="nofollow" href="http://www.templatemonster.com" class="new_window">Site web</a> designed by JeunePro.com<br />
			<a href="http://www.templates.com/product/3d-models/" class="new_window">3D Models</a> provided by JeunePro.com
		</div>
	</div>
</div>


</body>
</html>