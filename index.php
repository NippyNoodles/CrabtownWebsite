<?php
  if(!isset($_SESSION)) { 
    session_start();
   //sec_session_start();
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Crab News, Forums & Games - Crabtown: The Official World of Crabs</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
    <script type="text/JavaScript" src="/js/sha512.js"></script> 
    <script type="text/JavaScript" src="/js/forms.js"></script>
    
    <link rel="stylesheet" type="text/css" href="/css/Crabtown v1.0.css">
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/login.css"/>
    
    <link href='http://fonts.googleapis.com/css?family=Londrina+Solid' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Londrina+Shadow' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600' rel='stylesheet' type='text/css'>   
    
    <link rel="stylesheet" href="/css/login_menu.css"/>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
   
    <script type="text/javascript" 
    src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script> 
    <script type="text/JavaScript" src="/js/popup.js"></script>
     
  </head>
  
	<body>
    <!-- Navigation Menu at the top of each page -->
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/menu_navigation.php'; ?>
 
  <div id="content">
      
      <!-- Testing pop up menu -->
      <a href="#?w=500" rel="03" class="poplight">LINKS</a>
      
      <p>
          <h1>Welcome to Crabtown! v1.0</h1>
          Stay tuned for content, including new short stories, comics and more!
          <br>
          <br>
                                 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox" id="content">
        <!-- ITEMS -->
        <div class="item active">
          <img class="first-slide" src="/images/mayornippywelcome.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              
              <p>Register an account and become a Crabtown Citizen!</p>
              <p><a class="btn btn-lg btn-primary" href="/register" role="button">Sign Up</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="/images/crabtown_racing_banner.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Crabtown Racing</h1>
              <p>Nominated for Best Film at the Crabtown Film Festival!</p>
              <p><a class="btn btn-lg btn-primary" href="/content_pages/videos_page" role="button">Watch Now</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="/images/crablar_banner.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <p id="make_it_black">The Official Newspaper of Crabtown</p>
              <p><a class="btn btn-lg btn-primary" href="/content_pages/howers_shortstory" role="button">Go to Archives</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
    <br>
  </div>
 

  
  <div id="footer">
      <p>Something something all rights reserved crabtown copyright blah blah blah...  Not for human consumption.</p>
  </div>
	</body>
  
    <!-- Menu that pops up -->
    <div id="03" class="popup_block">
      <Center>
        <?php include_once '/login_menu.php'; ?>
      </center>
    </div>
  
  
</html>
