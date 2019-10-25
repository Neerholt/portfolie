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
               <div id="personlig"><!--Starten på min personligform. søge ord personlig Personlig-->
                    <center><h1>Opdater Kontakt oplysinger</h1></center>
                    <center><hr align="center" width="100%"></center>
                    
                    <center><form action="" method="">
                            <h2>Opdater mail</h2>
                            <input type="text" name="mail" placeholder="Opdater Mail" class="textboxsopret"> 
                             <center><hr align="center" width="100%"></center>
                             <h2>Opdater Telefonnummer</h2>
                            <input type="text" name="tf" placeholder="Opdater Telefonnummer" class="textboxsopret"> 
                             <center><hr align="center" width="100%"></center>
                            <h2>Opdater bopæl</h2>
                            <input type="text" name="bo" placeholder="Opdater Bopæl" class="textboxsopret"> 
                             <center><hr align="center" width="100%"></center>
                            <h2>Opdater Postnummer</h2>
                            <input type="text" name="post" placeholder="Opdater Postnummer" class="textboxsopret"> 
                             <center><hr align="center" width="100%"></center>
                            <h2>Opdater By</h2>
                            <input type="text" name="by" placeholder="Opdater By" class="textboxsopret"> 
                             <center><hr align="center" width="100%"></center>
                              <button class="" type="submit" name="OPAR">Opdater Kontakt Oplysninger</button> 
                    </form></center>
                   
                    
                   
                    
                </div><!--slutning på min personligform. søge ord personlig Personlig-->
                <div id="arbejde"><!--starten på min arbejdefom, søge ord arbejde Arbejde-->
                     <center><h1>Opdater Arbejdsområder</h1></center>
                    <center><hr align="center" width="100%"></center>
                     
                    <!--Linje-->
                    <svg height="100%">
                    <line y2="100%" style="stroke:rgb(0,0,0);stroke-width:2" />
                    </svg>
                    
                   
                    
                    <center> <form action="" method="">
                    <h2>Opdater Arbejdsområder 1</h2>
                    <input type="text" name="a" placeholder="Opdater arbejdsområde" class="textboxsopret"> 
                    <h2>Opdater Arbejdsområder 2</h2>
                    <input type="text" name="r" placeholder="Opdater arbejdsområde" class="textboxsopret"> 
                    <h2>Opdater Arbejdsområder 3</h2>
                    <input type="text" name="b" placeholder="Opdater arbejdsområde" class="textboxsopret"> 
                    <h2>Opdater Arbejdsområder 4</h2>
                    <input type="text" name="e" placeholder="Opdater arbejdsområde" class="textboxsopret"> 
                    <h2>Opdater Arbejdsområder 5</h2>
                    <input type="text" name="j" placeholder="Opdater arbejdsområde" class="textboxsopret"> 
                    <h2>Opdater Arbejdsområder 6</h2>
                    <input type="text" name="d" placeholder="Opdater arbejdsområde" class="textboxsopret"> 
                    <h2>Opdater Arbejdsområder 7</h2>
                    <input type="text" name="e" placeholder="Opdater arbejdsområde" class="textboxsopret">    
                    <center><hr align="center" width="100%"></center>
                    <button class="" type="submit" name="OPAR">Opdater arbejdsområde</button>     
                        </form>   </center>
                  
                 
                    
                </div><!--slutning på min arbejdefom, søge ord arbejde Arbejde-->
                <div id="Aboutme"><!--starten på aboutmeformen, søge ord Aboutme aboutme-->
                    <center><h1>Opdater Omkring mig</h1></center>
                    <center><hr align="center" width="100%"></center>
                    
                    <!--Linje-->
                    <svg height="100%">
                    <line y2="100%" style="stroke:rgb(0,0,0);stroke-width:2" />
                    </svg>
                    
                    <center> <form action="" method="">
                        <h3>Opdater Omkring mig</h4>
                      <center><textarea rows="42%" name="omkring" cols="45%" placeholder="Skriv din opdatering af omkring mig ." required></textarea></center> 
                      <center><hr align="center" width="100%"></center>
                      <button class="" onclick="sendbesked" type="submit" name="OPOM">Opdater omkring</button><!--Mangler css-->
                        </form></center>
                    
                </div><!--slutning på aboutmeformen, søge ord Aboutme aboutme-->
                
            </div><!--Slutning på min mainform, søge ord mainform Mainform-->
            <footer style="float:right">&copy; Copyright <?php echo date("Y");?> Victor Neerholt</footer>
        </div><!--Slut på min container div, Søge ord: Container container-->
    </body>
</html>



