<?php 
require_once "hood/config.php"; 
require_once "hood/engine.php";
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Research U</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="style.css"> 
</head>

<body>

<div class="container">
  <header>
    <a href="#"><img src="icon.jpg" alt="Re{search-u} logo" id="Insert_logo"/></a>
    
   <nav id="navigationbar">
         <a href="aboutus.php">ABOUT</a> &nbsp;|&nbsp;
         <a href="index.php">SEARCH</a> &nbsp;|&nbsp;
         <a href="#">LOGIN</a>
	</nav>
    
  </header>
    
    <?php get_page_contents(); ?>
 
 <div id="tagCloud">
 
 </div>
 <hr id="MainHR"/>
 <div id="MidNav" align="center">
 <a href="">LIST</a><a href="">REGION</a>
 </div>
 
 <div id="Map"></div>


  <footer>
    
  </footer>
  <!-- end .container -->
</div>
    
    
<script src="js/jquery_includes.js"></script>
</body>
</html>
