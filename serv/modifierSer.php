<?php
require_once "../db.php";
require_once "../function.php";
$id=$_GET['id'];
$service=getserviceById($id);
//$libelleS=$service['libelleS'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Services</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<title>Jeunes Pro - Site Vitrine</title>
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
	<div class="container">
			<form method="post" action="../controler.php">
					<fieldset>
						<legend style="text-decoration: underline;font-weight: bold;text-align: center;">Modifier les informations d'un service</legend>

						<div class="form-group">
							<label class="form-label" for="libelleS">Libelle_Service</label>
							<input type="text"  name="libelleS" value="<?=$service['libelleS']?>"  class="form-control">
						</div>	
						<div class="form-group">
							<label class="form-label" for="idT">Type_Service</label>
							<input type="number" name="idT" value="<?=$service['idT']?>"  class="form-control">
						</div>	
						<div class="form-group">
							<label class="form-label" for="etatSer">Etat_Service</label>
							<input type="number" value="<?=$service['etatSer']?>"  name="etatSer" class="form-control">
						</div>	
						<div class="form-group">
							<label class="form-label" for="id">Utilisateur</label>
							<input type="number" value="<?=$service['id']?>"  name="id" class="form-control">
						</div>	
						<div class="form-group">
							<input type="submit" value="valider" name="valider" class="btn-primary">
						</div>	
					</fieldset>
			</form>	
			<a href="index.php#services"><button class="btn-primary">Liste des services</button></a>
	</div>

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
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>