<?php
session_start();
if(!isset($_SESSION['login'])){
    header("location:index.html");
    exit;
}   
?>
<html>
    <head>
        <title>Portfolie</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="stylecss.css">
    </head>
    <body>
        <div id="container"><!--Starten på min container div, Søge ord: Container container-->
             <div id="mainHeaderContaioner"><!--Straten på mit div kasse for min mainheader og min nav-->
                 <div id="mainheader"><!--Starten på min mainheader, søge ord mainheader Mainheader-->
                <center><h1>Projekter</h1></center>
            </div><!--Slutning på min mainheader, søge ord mainheader Mainheader-->
            <div id="nav"><!--Starten på min nav, søge ord Nav nav-->
                <ul>
                     <li class="selected"><a href="loggedind.php">Admin Panel</a></li>
                    <li><a href="lavepost.php">Opret en Artikel</a></li>
                    <li><a href="updater.php">Opdater en Artikel</a></li>
                    <li><a href="slet.php">Slet en Artikel</a></li>
                     <li><a href="Opdaterkon.php">Opdater Kontakt</a></li>
                    <li><a href="pro.php">Se Opslag</a></li>
                    <li style="float:right"><a href="index.php">Log ud</a></li>
                </ul>
            </div><!--Slutning på min nav, søge ord Nav nav-->
               
            </div><!--slutning på mit div kasse for min mainheader og min nav-->
            <div id="mainform"><!--Starten på min mainform, søge ord mainform Mainform-->
                
                
               
                
            </div><!--Slutning på min mainform, søge ord mainform Mainform-->
          <!--  <footer style="float:right">&copy; Copyright <?php echo date("Y");?> Victor Neerholt</footer>-->
             <footer style="float:right">Website made by Victor Neerholt</footer>
        </div><!--Slut på min container div, Søge ord: Container container-->
    </body>
</html>
