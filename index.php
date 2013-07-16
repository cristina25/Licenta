<!DOCTYPE html>
<!--configuratie-->

    <?php
    include 'configuratie.php';
    include 'functii.php';
     ?>


<?php session_start(); ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> <?php echo $TITLE; ?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
        
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
      <link href="css/main.css" rel="stylesheet">
  </head>
  
<!--INDEX-->
 <?php if(isset($_GET['pagina'])){ 
          if($_GET['pagina'] == "locatii"){
      ?>
      <body style="background-image:url('imagini_ev/locatii.jpg');">
      <?php
  } ?>
           <body> <?php } ?>
               

  <?php if(isset($_GET['pagina'])){ 
          if($_GET['pagina'] == "concerte"){
      ?>
      <body style="background-image:url('imagini_ev/c3.jpg');">
      <?php
  }}else{  
      ?>
  <body style="background-image:url('imagini_ev/wall.jpg');"> 
      <?php
       
      ?>
      <body>
          <?php
  }
?>

          
             
          <?php if(isset($_GET['pagina'])){ 
          if($_GET['pagina'] == "home"){
      ?>
      <body style="background-image:url('imagini_ev/wall.jpg');">
      <?php
  }}else{
      
       
      ?>
      <body>
          <?php
  }
  ?>
          
           <?php if(isset($_GET['pagina'])){ 
          if($_GET['pagina'] == "user"){
      ?>
      <body style="background-image:url('imagini_ev/reg.jpg');">
      <?php
  } ?>
           <body> <?php } ?>
               
            <?php if(isset($_GET['pagina'])){ 
          if($_GET['pagina'] == "contact"){
      ?>
      <body style="background-image:url('imagini_ev/reg.jpg');">
      <?php
  } ?>
           <body> <?php } ?>
               
               
                <?php if(isset($_GET['pagina'])){ 
          if($_GET['pagina'] == "admin"){
      ?>
      <body style="background-image:url('imagini_ev/reg.jpg');">
      <?php
  } ?>
           <body> <?php } ?>
               
               
                
          <?php if(isset($_GET['pagina'])){ 
          if($_GET['pagina'] == "register"){
      ?>
      <body style="background-image:url('imagini_ev/reg.jpg');">
      <?php
  } ?>
           <body> <?php } ?>
         
          
          
          
          
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            
            <!--MENIU-->
          <!--<a class="brand" href="#">Bilete la concertele preferate</a>-->
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="index.php?pagina=home">Home</a></li>
              <li><a href="index.php?pagina=concerte">Concerte</a></li>
              <li><a href="index.php?pagina=rapoarte">Rapoarte</a></li>
              <li><a href="index.php?pagina=rezervari">Rezervari</a></li>
              <li><a href="index.php?pagina=locatii">Locatii</a></li>
              <li><a href="index.php?pagina=contact">Contact</a></li>
                
            </ul>
              
             <p class="navbar-text  pull-right">
                 
           <?php  if(isset($_SESSION['user'])) { ?>
	              Logged in as <a href="index.php?pagina=user" class="navbar-link"><?php echo $_SESSION['user']; ?></a>
	                <a href="pagini/logout.php" class="navbar-link" style="margin-left:20px;">Logout</a>
	                <?php } else { ?> 
                        
	             <a href="index.php?pagina=user" class="navbar-link" style="margin-left:20px;"><b> Login </b></a>
               <a href="index.php?pagina=register" class="navbar-link" style="margin-left:20px;"><b> Register </b></a>
	              <?php } ?>
             </p>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
      

    <div class="container">

        <?php if(!isset($_GET['pagina']) || $_GET['pagina']=='home') include 'pagini/home.php';
	    		else include 'pagini/' . $_GET["pagina"] . '.php'; 

	    ?>
      <hr>

      <footer>
        <p> &copy <?php echo $TITLE?> 2013</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <script src="http://code.jquery.com/jquery-1.9.1.js"</script>
    <script src="js/bootstrap.min.js"></script>
   
  </body>
</html>
