<?php
session_start();
if(!isset($_SESSION['login'])){
    header("location:index.html");
    exit;
}
?>
<html>
    <head>
        <title>Portfolie-Updater Artikel</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="stylecss.css">
    </head>
    <body>
        <div id="container"><!--Starten på min container div, Søge ord: Container container-->
            <div id="mainheader"><!--Starten på min mainheader, søge ord mainheader Mainheader-->
                <center><h1><font size="30">Updater Artikel</font></h1></center>
            </div><!--Slutning på min mainheader, søge ord mainheader Mainheader-->
            <div id="nav"><!--Starten på min nav, søge ord Nav nav-->
                <ul>
                    <li><a href="loggedind.php">Admin Panel</a></li>
                    <li><a href="lavepost.php">Opret en Artikel</a></li>
                    <li><a href="updater.php">Opdater en Artikel</a></li>
                    <li><a href="slet.php">Slet en Artikel</a></li>
                    <li class="selected"><a href="Opdaterkon.php">Opdater Kontakt</a></li>
                    <li><a href="pro.php">Se Opslag</a></li>
                    <li style="float:right"><a href="index.php">Log ud</a></li>
                </ul>
            </div><!--Slutning på min nav, søge ord Nav nav-->
            <div id="mainform"><!--Starten på min mainform, søge ord mainform Mainform--> 
               <div id="personligop"><!--Starten på min personligform. søge ord personlig Personlig-->
                    <center><h1>Opdater Kontakt oplysinger</h1></center>
                    <center><hr align="center" width="100%"></center>
                    <center><form action="" method="">
                            <h2>Opdater mail</h2>
                            <input type="text" name="mail" placeholder="Opdater Mail" class="textboxsopret"> 
                             <h2>Opdater Telefonnummer</h2>
                            <input type="text" name="tf" placeholder="Opdater Telefonnummer" class="textboxsopret"> 
                            <h2>Opdater bopæl</h2>
                            <input type="text" name="bo" placeholder="Opdater Bopæl" class="textboxsopret"> 
                            <h2>Opdater Postnummer</h2>
                            <input type="text" name="post" placeholder="Opdater Postnummer" class="textboxsopret"> 
                            <h2>Opdater By</h2>
                            <input type="text" name="by" placeholder="Opdater By" class="textboxsopret"> 
                    </form></center>
                   
                    
                    
                </div><!--slutning på min personligform. søge ord personlig Personlig-->
                <div id="arbejdeop"><!--starten på min arbejdefom, søge ord arbejde Arbejde-->
                     <center><h1>Opdater Arbejdsområder</h1></center>
                    <center><hr align="center" width="100%"></center>
                    <!--Linje-->
                    <svg height="100%">
                    <line y2="85%" style="stroke:rgb(0,0,0);stroke-width:4" />
                    </svg>
                    
                      <form action="" method="">
                    <h2>Opdater 1</h2>
                    <input type="text" name="a" placeholder="Opdater arbejdsområde" class="textboxsopret"> 
                    <h2>Opdater 2</h2>
                    <input type="text" name="r" placeholder="Opdater arbejdsområde" class="textboxsopret"> 
                    <h2>Opdater 3</h2>
                    <input type="text" name="b" placeholder="Opdater arbejdsområde" class="textboxsopret"> 
                    <h2>Opdater 4</h2>
                    <input type="text" name="e" placeholder="Opdater arbejdsområde" class="textboxsopret"> 
                    <h2>Opdater 5</h2>
                    <input type="text" name="j" placeholder="Opdater arbejdsområde" class="textboxsopret"> 
                    <h2>Opdater 6</h2>
                    <input type="text" name="d" placeholder="Opdater arbejdsområde" class="textboxsopret"> 
                    <h2>Opdater 7</h2>
                    <input type="text" name="e" placeholder="Opdater arbejdsområde" class="textboxsopret">    
                    </form>   
                  
                 
                    
                </div><!--slutning på min arbejdefom, søge ord arbejde Arbejde-->
                <div id="Aboutmeop"><!--starten på aboutmeformen, søge ord Aboutme aboutme-->
                    <center><h1>Opdater Omkring mig</h1></center>
                    <center><hr align="center" width="100%"></center>
                    
                    <!--Linje-->
                    <svg height="100%">
                    <line y2="85%" style="stroke:rgb(0,0,0);stroke-width:4" />
                    </svg>
                    
                       <!--make your main code here-->
                    
                </div><!--slutning på aboutmeformen, søge ord Aboutme aboutme-->
                
            </div><!--Slutning på min mainform, søge ord mainform Mainform-->
            <footer style="float:right">&copy; Copyright <?php echo date("Y");?> Victor Neerholt</footer>
        </div><!--Slut på min container div, Søge ord: Container container-->
    </body>
</html>



