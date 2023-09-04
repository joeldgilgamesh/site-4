<!DOCTYPE html>
<html lang="fr">
<!--=========================================================
* Template - v2.3.1
=========================================================

* Product Page: https://www.blumdesk.com
* Copyright 2020 Blumdesk Sarl (https://www.blumdesk.com)

Coded by www.blumdesk.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<head>
      <meta charset="utf-8">
      <link rel="apple-touch-icon" sizes="76x76" href="img/entete.png">
      <link rel="icon" type="image/png" href="img/entete.png">
     
      
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Page title -->
      <title>Bergeronnette - contact</title>
      
      
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
      <!-- Icon fonts -->
      <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="fonts/glyphicons/bootstrap-glyphicons.css" rel="stylesheet" type="text/css">
      <link href="fonts/flaticons/flaticon.css" rel="stylesheet" type="text/css">
      <!-- Google fonts -->
      <link href="https://fonts.googleapis.com/css?family=Baloo|Lato:400,700,900" rel="stylesheet">
      <!-- Style CSS -->
      <link href="css/style.css" rel="stylesheet">
      <!-- Plugins CSS -->
      <link rel="stylesheet" href="css/plugins.css">
      <!-- Color Style CSS -->
      <link href="styles/maincolors.css" rel="stylesheet">
      <!-- Favicons-->
      <link rel="apple-touch-icon" sizes="72x72" href="../../apple-icon-72x72.html">
      <link rel="apple-touch-icon" sizes="114x114" href="../../apple-icon-114x114.html">
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	  	  <!-- Switcher Only -->
      <link rel="stylesheet" id="switcher-css" type="text/css" href="switcher/css/switcher.css" media="all" />
	 
   </head>
   <body id="page-top" data-spy="scroll" data-target=".navbar-custom">
   
      <div class="demo_changer">
         <div class="demo-icon">
            <i class="fa fa-cog fa-2x"></i>
         </div>
         <!-- end opener icon -->
         <div class="form_holder text-center">
            <div class="row">
               <div class="col-lg-12">
                  <div class="predefined_styles">				  
                    <h5>Choose language</h5>	
                      <a href="contact-2.html" class="btn active">English</a>		
                      <a href="contact.html" class="btn margin">Francais</a>
                  </div>
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
         </div>
         <!-- end form_holder -->
      </div>
      <!-- Preloader  --> 
      <div id="preloader">
         <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
         </div>
      </div>
      <!-- /Preloader ends --> 
      <div id="page-width">
         <!-- Navbar -->
         <nav class="navbar navbar-custom navbar-fixed-top"  id="navbar-custom">
            <div class="container">
               <!-- Logo and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand">
                  <i class="fa fa-bars"></i>
                  </button>
                  <!-- Logo -->
                  <div class="navbar-brand page-scroll">
                     <a href="#page-top"><img src="img/logo_light.png"  class="img-responsive" alt=""></a>
                  </div>
               </div>
               <!-- /.navbar-header -->
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="navbar-brand">
                  <ul class="nav navbar-nav page-scroll navbar-right">
                     <li ><a href="index.html">Acceuil</a></li>
                     <li><a href="formation.html">Formation</a></li>
                     <li><a href="about.html">A propos</a></li>
                     <li><a href="actu.html">Actualité</a></li>
                     <li><a href="contact.html">Contactez-nous</a></li>
                   
                  </ul>
               </div>
               <!-- /.navbar-collapse -->
            </div>
            <!-- /container -->
         </nav>
         <!-- /nav -->
         <!-- Blog Page -->
         <div id="page-section" class="container-fluid">
               <div class="">
                  <div class="jumbotron3"></div>
                  <!-- /jumbotron-->
                  <div class="jumbo-heading">
                     <!-- Heading -->
                     <h1>Conctatez-nous</h1>
                  </div>
                  <!-- /jumbo-heading -->
               </div>


               <section id="contact" class="bg-lightcolor1 container-fluid nobg-small ">
                           
                           
                  <div class="parallax-object1 hidden-sm hidden-xs" data-0="opacity:1;"
                     data-100="transform:translatex(-310%);"
                     data-center-center="transform:translatex(30%);">
                     <!-- Image -->
                     <img src="img/birdornament.png" alt="">
                  </div>
                  
                  
                  <div class="container mt-0">
                     <!-- Contact Form -->
                     <div class="col-md-5">
                        <!-- Form Starts -->
                        <div id="contact_form" >
                         <form class="mb-0"  action="contactform.php" method="post">
                           <h4>Formulaire de contact </h4>
                           <div class="form-group">
                              <label>Nom complet:</label><input type="text" name="name" class="form-control" >                    
                              <label>Email:</label><input type="email" name="email" class="form-control " >     
							         <label>Telephone:</label><input type="text" name="phone" class="form-control " >       
                              <label>Suject:</label><input type="text" name="subject" class="form-control " >                     
                           </div>
                           <label>Message:</label>
                           <textarea name="message" id="message" class="textarea-field form-control" rows="4" ></textarea>
                           <button type="submit" id="submit_btn" value="Submit" class="btn center-block">Envoyez</button>
                          </form>
                        </div>
                        <!-- Contact results -->
                        <?php

                           $to = 'contact@bergeronnette.cm';
                           $subject = 'Email Site Web bergeonnette';
                           $headers = "MIME-Version: 1.0"."\r\n";
                           $headers.='Content-type: text/html; charset: UTF-8'."\r\n";
                           $headers.= "Messsage_de: ".$_POST['name']."\r\n";
                           $message= "\n<!DOCTYPE html><html><head><meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\"></head><body>Nom: ".$_POST['name']."<br><br>\r\n\r\n";
                           $message.= "Nom: ".$_POST['name']."<br><br>\r\n\r\n";
                           $email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
                           if(isset($email) && $email && isset($_POST['name'])){
                              $headers.= "Repondez_&agrave;: $email";
                              $message.= "Email: ".$_POST['email']."<br><br>\r\n\r\n";
                              $message.= "phone: ".$_POST['phone']."<br><br>\r\n\r\n";
                              $message.= "subject: ".$_POST['subject']."<br><br>\r\n\r\n";
                              $message.= "Message: ".$_POST['message']."<br><br></body></html>";
                              $sent = mail($to,$subject,$message,$headers,'-f'.$to);
                           }else{
                              echo "<script> alert(\"L\'adresse e-mail est incorrecte. Veuillez corriger l\'adresse avant d\'envoyer le message.\"); </script>";
                           }
                           if(isset($sent) && $sent && isset($_POST['name'])){
                              echo "<script>alert(\"Votre message est en cours d\'envoi. Merci de votre coopération.\");</script>";
                           }else{
                              echo "<script>alert(\"Erreur : Message non envoyé. Veuillez réessayer.\");</script>";
                           }
                         ?>

                     </div>
                     <div class="res-margin">
                        <div class="col-md-6 col-md-offset-1 well text-center">
                           <h4>Information</h4>
                           <!-- contact info -->			   
                           <div class="contact-info ">
                              <p><i class="fa fa-envelope margin-icon"></i><a href="mailto:contact@bergeronnette.cm">contact@bergeronnette.cm</a></p>
                              <p><i class="fa fa-phone margin-icon"></i>phone :  +237 699 91 35 07 / 676 39 75 16 </p>
                              <p><i class="fa fa-map-marker margin-icon"></i>Logbaba Route St Thomas B.P : 6274</p>
                           </div>
                        </div>
                     </div>
                     <!-- /res-margin -->
                  </div>
                  <!-- /container -->
               </section>
         </div>
         <!--/page-section-->
        	
         <footer>
            <div class="container">
               <div class="col-md-4">
                  <h6>La scolarité</h6>
                  <p>C'est le prix à payer pour la formation de l'enfant. pour toute information relative aux frais d'inscription et de 
                     scolarité : prendre attache avec la direction de l'école
                  </p>
               </div>
               <!-- /.col-md-4 -->
               <div class="col-md-5 res-margin">
                  <ul class="list-unstyled footer-icons">
                     <li><i class="fa fa-phone"></i>phone :  +237 699 91 35 07 / 676 39 75 16</li>
                     <li><i class="fa fa-envelope"></i>Email: <a href="mailto:contact@bergeronnette.cm">contact@bergeronnette.cm</a></li>
                     <li><i class="fa fa-map-marker"></i>Logbaba Route St Thomas B.P : 6274</li>
                     <li><i class="fa fa-clock-o"></i>lundi - Vendredi de 07:30 à 15:00</li>
                  </ul>
               </div>
               <!-- /.col-md-4 -->

               <div class="col-md-3 text-center">
                  <img src="img/logo.png" alt="" class="res-margin center-block img-responsive">
                  <!--Social icons -->
                  <div class="social-media smaller">
                   
                     <a href="#" title=""><i class="fa fa-facebook"></i></a>
                     <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                  </div>
               </div>
               <!-- Credits-->
               <div class="credits col-md-12 text-center">
                  <hr/>
                  Copyright © 2022 / Designed by <a href="http://www.blumdesk.com/">Blumdesk</a>
                  <!-- Go To Top Link -->
                  <div class="page-scroll hidden-sm hidden-xs">
                     <a href="#page-top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
                  </div>
               </div>
               <!-- /credits -->
            </div>
            <!-- /.container -->
         </footer>
         <!-- /footer ends -->
      </div>
      <!-- /page-width -->
      <!-- Core JavaScript Files -->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- Main Js -->
      <script src="js/main.js"></script>
      <!-- Contact -->
      <script src="js/contact.js"></script>
      <!--Other Plugins -->
      <script src="js/plugins.js"></script>
      <!-- Prefix free CSS -->
      <script src="js/prefixfree.js"></script>
	  	  <!-- Bootstrap Select Tool (For Module #4) -->
<script src="switcher/js/bootstrap-select.js"></script>
<!-- UI jQuery (For Module #5 and #6) -->
<script src="../../../ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.js" type="text/javascript"></script>
<!-- All Scripts & Plugins -->
<script src="switcher/js/dmss.js"></script>
   </body>

</html>
  
        