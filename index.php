

<?php
require_once "db.php";
require_once "function.php";

$Utilisateurs=findAll();
  if (isset($_GET['recher']) && !empty($_GET['recher'])) {
	$esses=recherche($_GET['recher']);
}
$services=listservice(); 

if (isset($_GET['recherche']) && !empty($_GET['recherche'])) {
	$res=recherche($_GET['recherche']);
}




?>

<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>JeunesPro</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   	<link rel="stylesheet" type="text/css" href="ese/bootstrap.min.css">
	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/media-queries.css">         

   <!-- Script
   =================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	=================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

</head>

<body class="Accueilpage">

   <div id="preloader"> 
	   <div id="status">
         <img src="images/loader.gif" height="60" width="60" alt="">
         <div class="loader">Loading...</div>
      </div>
   </div>
   

   <!-- Header
   =================================================== -->
   <header id="main-header">

   	<div class="row header-inner">

	      <div class="logo">
	         <a class="smoothscroll" href="#hero">JeunesPro.</a>
	      </div>

	      <nav id="nav-wrap">         
	         
	         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">
	         	<span class='menu-text'>Show Menu</span>
	         	<span class="menu-icon"></span>
	         </a>
         	<a class="mobile-btn" href="#" title="Hide navigation">
         		<span class='menu-text'>Hide Menu</span>
         		<span class="menu-icon"></span>
         	</a>         

	         <ul id="nav" class="nav">
	            <li class="current"><a class="smoothscroll" href="#hero">Accueil.</a></li>
		         <li><a class="smoothscroll" href="#portfolio">Entreprise.</a></li>
	            <li><a class="smoothscroll" href="#services">Services.</a></li>
	            <li><a class="smoothscroll" href="#about">About.</a></li>
	            <li><a class="smoothscroll" href="#journal">Blog.</a></li>	            
	            <li><a class="smoothscroll" href="#contact">Contact.</a></li>
	         </ul> 

	      </nav> <!-- /nav-wrap -->	      

	   </div> <!-- /header-inner -->

   </header> 


   <!-- Hero
   =================================================== -->
   <section id="hero">	
   	  
		<div class="row hero-content">

			<div class="twelve columns flex-container">

			   <div id="hero-slider" class="flexslider">

				   <ul class="slides">

					   <!-- Slide -->
					   <li>
						   <div class="flex-caption">
								<h1>Salut,Nous sommes JeunesPro. We make awesome and stunning digital stuff.</h1>	
								<p><a class="button stroke smoothscroll" href="#about">Voir notre équipe</a></p>																   
							</div>						
					   </li>

					   <!-- Slide -->
					   <li>						
							<div class="flex-caption">
								<h1 >We imagine, craft and manage your brand in this new digital world.</h1>	
								<p><a class="button stroke smoothscroll" href="#portfolio">Voir Notre Entreprise</a></p>									   
							</div>					
					   </li>

					   <!-- Slide -->
					   <li>
						   <div class="flex-caption">
								<h1 >Take a look at some of <a class="smoothscroll" href="#portfolio" title="">notre entreprise</a> or <a class="smoothscroll" href="#contact" title="">Nous contacter</a> to discuss how we can help you.</h1>
								<p><a class="button stroke smoothscroll" href="#contact">Voir le formulaire de contact</a></p>										   
							</div>
					   </li>					              

				   </ul>

			   </div> <!-- .flexslider -->				   

	      </div> <!-- .flex-container -->      

		</div> <!-- .hero-content -->	   

   </section> <!-- #hero -->


   <!-- ENTREPRISE
   ================================================== -->
   <section id="portfolio">

      <div class="row section-head">

      	<div class="twelve columns">

	         <h1>Entreprise<span>.</span></h1>

	         <hr />

	      </div>

      </div>

      <div class="row items">

      	<div class="twelve columns">

            <div id="portfolio-wrapper" class="bgrid-fourth s-bgrid-third mob-bgrid-half group">

     <div class="container" id="pere">     	  
       <table style="text-align: center" class="table table-bordered mt-5">
				<div class="jumbotron">
					<h1 id="fils" style="text-decoration: underline;font-family: bold;text-align: center">Liste des Utilisateurs</h1>
				</div>
				<form method="get" action="" >
					<div class="form-group" class="container" id="pere">
						<label for="recher">Rechercher <input type="txt"  name="recher" class="form-control" placeholder="rechercher ici"></label>
						<button class="btn-primary">Rechercher</button>
					</div>
				</form>
					<?php if(isset($_GET['ok']) && $_GET['ok']==1){
				echo"<span class='alert-success' style='text-align: center;font-family: serif;'>suppression réussie</span>";
				header("Refresh:1;url=index.php");
			} ?>
				<tr style="background-color: lightblue">
					<td>ID</td>
					<td>MAIL</td>
					<td>NOM</td>
					<td>PRENOM</td>
					<td>Telephone</td>
					<td>Login</td>
					<td>Password</td>
					<td>Etat</td>
					<td colspan="3">ACTION</td>
				</tr>
				<?php if (!empty($esses)) { ?>
					<?php foreach($esses as $E) { ?>
				<tr>
					<td>#<?=$E['id']?></td>
					<td><?=$E['mail']?></td>
					<td><?=$E['nom']?></td>
					<td><?=$E['prenom']?></td>
					<td><?=$E['tel']?></td>
					<td><?=$E['login']?></td>
					<td><?=$E['password']?></td>
					<td><?=$E['etat']?></td>
					<td><a href="ese/detail.php?id=<?=$E['id']?>"><button class="btn btn-outline-success">Detail</button></a></td>
					<td><a href="ese/modifier.php?id=<?=$E['id']?>"><button class="btn btn-outline-primary">modifier</button></a></td>
					<td><a href="ese/supprimer.php?id=<?=$E['id']?>"><button class="btn btn-outline-danger">supprimer</button></a></td>
				</tr>
				<?php } ?>
				<?php }else{ ?>
				<?php foreach($Utilisateurs as $E) { ?>
				<tr>
					<td>#<?=$E['id']?></td>
					<td><?=$E['mail']?></td>
					<td><?=$E['nom']?></td>
					<td><?=$E['prenom']?></td>
					<td><?=$E['tel']?></td>
					<td><?=$E['login']?></td>
					<td><?=$E['password']?></td>
					<td><?=$E['etat']?></td>
					<td><a href="ese/detail.php?id=<?=$E['id']?>"><button class="btn btn-outline-success">Detail</button></a></td>
					<td><a href="ese/modifier.php?id=<?=$E['id']?>"><button class="btn btn-outline-primary">modifier</button></a></td>
					<td><a href="ese/supprimer.php?id=<?=$E['id']?>"><button class="btn btn-outline-danger">supprimer</button></a></td>
				</tr>
				<?php } ?>
				<?php } ?>
			</table>
		<a href="ese/form.php"><button class="btn btn-outline-primary">Ajouter un Utilisateur</button></a>
    </div>       
               
            </div> <!-- /portfolio-wrapper -->

         </div> <!-- /twelve -->

      </div>  <!-- /row -->
      
   </section> <!-- /Portfolio -->


   <!-- Services Section
   ================================================== -->
   <section id="services">

   	<div class="row section-head">

   		<div class="twelve columns">

	         <h1>Nos Services<span>.</span></h1>

	         <hr />

         </div>

      </div>

      <div class="row">

      	<div class="twelve columns">

	      	<div class="service-list bgrid-third s-bgrid-half mob-bgrid-whole">

      	   
          
	   <div class="container" id="pere">
			<table style="text-align: center" class="table table-bordered mt-5">
				<div class="jumbotron">
					<h1 id="fils" style="text-decoration: underline;font-family: bold;text-align: center">Liste des services</h1>
				</div>
				<form method="get" action="">
			<div class="form-group">
				<label for="recherche">Rechercher <input type="txt"  name="recherche" class="form-control" placeholder="rechercher ici"></label>
				<button class="btn-primary">rechercher</button>
			</div>
		</form>
					<?php if(isset($_GET['ok']) && $_GET['ok']==1){
				echo"<span class='alert-success' style='text-align: center;font-family: serif;'>suppression réussie</span>";
				header("Refresh:1;url=index.php");
			} ?>
				<tr style="background-color: lightblue">
					<td>ID</td>
					<td>Libelle service</td>
					<td>Type Service</td>
					<td>Etat Service</td>
					<td>Utilisateur</td>
					<td colspan="3">ACTION</td>
				</tr>
				<?php if (!empty($res)) { ?>
					<?php foreach($res as $S) { ?>
				<tr>
					<td>#<?=$S['idS']?></td>
					<td><?=$S['libelleS']?></td>
					<td><?=$S['idT']?></td>
					<td><?=$S['etatSer']?></td>
					<td><?=$S['id']?></td>
					<td><a href="serv/detailSer.php?id=<?=$S['id']?>"><button class="btn btn-outline-success">Detail</button></a></td>
					<td><a href="serv/modifierSer.php?id=<?=$S['id']?>"><button class="btn btn-outline-primary">modifier</button></a></td>
					<td><a href="serv/supprimerSer.php?id=<?=$S['id']?>"><button class="btn btn-outline-danger">supprimer</button></a></td>
				</tr>
				<?php } ?>
				<?php }else{ ?>
				<?php foreach($services as $S) { ?>
				<tr>
					<td>#<?=$S['idS']?></td>
					<td><?=$S['libelleS']?></td>
					<td><?=$S['idT']?></td>
					<td><?=$S['etatSer']?></td>
					<td><?=$S['id']?></td>
					<td><a href="serv/detailSer.php?id=<?=$S['id']?>"><button class="btn btn-outline-success">Detail</button></a></td>
					<td><a href="serv/modifierSer.php?id=<?=$S['id']?>"><button class="btn btn-outline-primary">modifier</button></a></td>
					<td><a href="serv/supprimerSer.php?id=<?=$S['id']?>"><button class="btn btn-outline-danger">supprimer</button></a></td>
				</tr>
				<?php } ?>
				<?php } ?>
			</table>
		<a href="serv/formSer.php"><button class="btn btn-outline-primary">Ajouter un service</button></a>
	</div>       
		              
				   

				  

	      </div> <!-- /twelve -->

      </div> <!-- /row -->      

   </section> <!-- /services -->   


   <!-- About Section
   ================================================== -->
   <section id="about">

   	

         

     

      <!-- team
   	=================================================== -->
   	<div id='team'>

	      <div class="row team section-head">

	   		<div class="twelve columns">

		         <h1>Our Rockstar Team<span>.</span></h1>

		         <hr />	         

		      </div>

	      </div>

      	<div class="row about-content">

      		<div class="twelve columns">

		         <div id="team-wrapper" class="bgrid-half mob-bgrid-whole group">

		            <div class="bgrid member">

		               <div class="member-header">

		                 	<div class="member-pic">
									<img src="images/team/member01-kk.jpg" alt=""/>                        	                       	
		                 	</div>

		                  <div class="member-name">
		                     <h3>Mamoudou Gueye</h3>
		                     <span>Creative Director</span>
		                  </div>

		               </div>							
                      <hr>
		               <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
		               nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>

		               <ul class="member-social">
		                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
		                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
		                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
		               </ul>

		          	</div> <!-- /member -->

		            <div class="bgrid member">

		              	<div class="member-header">
										
								<div class="member-pic">
		                 		<img src="images/team/member02-k.jpg" alt=""/>                        	
		                	</div>
		                
		                	<div class="member-name">
		                   	<h3>Landing Diallo</h3>
		                   	<span>Lead Designer</span>
		                	</div>

		               </div>

		               <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
		               nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>

		               <ul class="member-social">
		                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
		                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
		                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
		               </ul>

		       		</div> <!-- /member -->

		            

		         </div> <!-- /twelve -->

	         </div> <!-- /team-wrapper -->

         </div> <!-- /row -->

      </div> <!-- /team -->           

   </section> <!-- /about -->


   <!-- journal
   =================================================== -->
   <section id="journal">

	   <div class="row section-head">

	   	<div class="twelve columns">

			   <h1>Our Latest Ramblings<span>.</span></h1>

			   <hr />

			   <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
		      </p>	         
            
		    </div>

	   </div>

      <div class="row">

      	<div class="twelve columns">

	         <div id="blog-wrapper" class="bgrid-third s-bgrid-half mob-bgrid-whole group">    
	          
						

	            
	                       

	         </div> <!-- /blog-wrapper -->

	      </div> <!-- /twelve -->

      </div> <!-- /row -->

   </section> <!-- /blog -->

   
   <!-- Contact Section
   ================================================== -->
   <section id="contact">

   	<div class="row section-head">

   		<div class="twelve columns">

	         <h1>Get In Touch With Us<span>.</span></h1>

	         <hr />

	         <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
	         </p>

	      </div>

      </div>

      <div class="row form-section">
      	
      	<div id="contact-form" class="twelve columns">

            <form name="contactForm" id="contactForm" method="post" action="">

      			<fieldset>

                  <div class="row">

	                  <div class="six columns mob-whole">
	                  	<label for="contactFname">Nom <span class="required">*</span></label>	      						   
	      					<input name="contactFname" type="text" id="contactFname" placeholder="First Name" value="" />	      					
	                  </div>

	                  <div class="six columns mob-whole">	
	                  	<label for="contactLname">Prénom <span class="required">*</span></label>      						   
	      					<input name="contactLname" type="text" id="contactLname" placeholder="Last Name" value="" />	      					
	                  </div>	                        

                  </div>

                  <div class="row">

	                  <div class="six columns mob-whole">	
	                  	<label for="contactEmail">Email <span class="required">*</span></label>      						   
	      					<input name="contactEmail" type="text" id="contactEmail" placeholder="Email" value="" />	      					
	                  </div>

	                  <div class="six columns mob-whole">	 
	                  	<label for="contactSubject">Subject</label>     						   
	      					<input name="contactSubject" type="text" id="contactSubject" placeholder="Subject"  value="" />	      					
	                  </div>

                  </div>

                  <div class="row">

	                  <div class="twelve columns">
	                     <label  for="contactMessage">Message <span class="required">*</span></label>
	                     <textarea name="contactMessage"  id="contactMessage" placeholder="Your Message" rows="10" cols="50" ></textarea>
	                  </div>

                  </div>

                  <div>
                     <button class="submit full-width">Envoyer Message</button>
                     <div id="image-loader">
                        <img src="images/loader.gif" alt="" />
                     </div>
                  </div>

      			</fieldset>
      				
      		</form> <!-- /contactForm -->

            <!-- message box -->
            <div id="message-warning"></div>
            <div id="message-success">
               <i class="fa fa-check"></i>Votre message a été envoyé, Merçi!<br />
    			</div>

         </div> <!-- /contact-form -->      	

      </div> <!-- /form-section -->     

   </section>  <!-- /contact-->


   <!-- Footer
   ================================================== -->
   <footer>

      <div class="row">       

         <div class="six columns tab-whole footer-about">
				
				<h3>About JeunesPro</h3>
               
            <p>
            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
            nibh id elit. 
            </p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>        

         </div> <!-- /footer-about -->

         <div class="six columns tab-whole right-cols">

            <div class="row">

               <div class="columns">
                  <h3 class="address">Contact Us</h3>
                  <p>
                  1600 Amphitheatre Parkway<br>
                  Mountain View, CA<br>
                  94043 US
                  </p>

                  <ul>
                    <li><a href="tel:6473438234">647.343.8234</a></li>
                    <li><a href="tel:1234567890">123.456.7890</a></li>
                    <li><a href="mailto:someone@JeunesPro.com">someone@JeunesPro.com</a></li>
                  </ul>                  
               </div> <!-- /columns -->             

               <div class="columns last">
                  <h3 class="contact">Follow Us</h3>

                  <ul>
                     <li><a href="#">Facebook</a></li>
                     <li><a href="#">Twitter</a></li>
                     <li><a href="#">GooglePlus</a></li>
                     <li><a href="#">Instagram</a></li>
                     <li><a href="#">Flickr</a></li>
                     <li><a href="#">Skype</a></li>
                  </ul>
                  
               </div> <!-- /columns --> 

            </div> <!-- /Row(nested) -->

         </div>

         <p class="copyright">&copy; Copyright 2021 JeunesPro. Design by <a href="http://www.styleshout.com/">Styleshout.</a></p>        

         <div id="go-top">
            <a class="smoothscroll" title="Back to Top" href="#hero"><span>haut</span><i class="fa fa-long-arrow-up"></i></a>
         </div>

      </div> <!-- /row -->

   </footer> <!-- /footer -->


   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>   
   <script src="js/jquery.flexslider.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/backstretch.js"></script> 
   <script src="js/waypoints.js"></script>  
   <script src="js/main.js"></script>

</body>

</html>