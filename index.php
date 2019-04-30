<!DOCTYPE html>
<html>
<head>
<title>Constanze's Web 120 Portal Page</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-home"></i>Constanze's Web 120 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="AAI/aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contact.php">Contact Constanze</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Welcome</h2>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="images/constanze.jpg" class="desktop" alt="Constanze" />
 <img src="images/UW.jpg" class="phone" alt="UW campus" />
 <p>My name is Constanze Kolbe and I am student in the certificate program in Computers and Technology. I am originally from Germany, but have been living in the US since 2010, when I moved to Bloomington, Indiana to pursue a PHD in History. After having worked for a while as an academic in Seattle, I decided that I want to shift from the past ( History) to understanding which technologies will shape the future and how. I want to bridge my past background in History and languages with a new career in technology: this is why I am learning HTML!I am particularly interested in UC Research positions leveraging my extensive experience in research and languages.</p> 
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Right Column</h3>
 <img src="images/hiking.jpg" class="tablet" alt="Hiking in the Cascades" />
 
    <!---Start Form---->
    
    
    
   
 
    
    <!---end form---->
    
    
</aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
<footer>
  <p><small>&copy; 2019 - <?=date('Y')?> by <a href="#" target="_blank">Constanze </a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
</div>
<!-- END WRAPPER -->

</body>
</html>
