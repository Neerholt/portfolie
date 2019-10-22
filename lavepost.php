<?php 
if(isset($_POST['GEM'])){
  
$servername = 'localhost';
$username = 'root';
$password = '';
$databasename = 'portfolielogin';


$overskrift = $_POST ['overskrift'];
//$efternavn = $_POST ['efternavn'];
$atikeltext = $_POST ['atikeltext'];

 
$connect = mysqli_connect($servername, $username, $password, $databasename);


if(!$connect){
    die("Connectiuon failed because" .mysqli_connect_error());
} 

$sql_tabel = "INSERT INTO opret (ID, overskrift, billede, atikeltext) VALUES (NULL,'$overskrift',NULL,'$atikeltext')";

$data = mysqli_query($connect,$sql_tabel);


header("location:loggedind.php");

mysqli_close($connect);

}
?>    

<?php
session_start();
if(!isset($_SESSION['login'])){
    header("location:index.html");
    exit;
}
?>
<html>
    <head>
        <title>Opret en artikel</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="stylecss.css">
    </head>
    <body>
        <div id="container"><!--Starten på min container div, Søge ord: Container container-->
            <div id="mainheader"><!--Starten på min mainheader, søge ord mainheader Mainheader-->
                <center><h1><font size="30">Opret Artikel</font></h1></center>
            </div><!--Slutning på min mainheader, søge ord mainheader Mainheader-->
            <div id="nav"><!--Starten på min nav, søge ord Nav nav-->
                <ul>
                    <!--<li><a href="index.html">Forside</a></li>
                    <li><a href="pro.html">Projektere</a></li>
                    <li><a href="kon.html">Kontakt</a></li>-->
                    <li><a href="loggedind.php">Admin Panel</a></li>
                    <li class="selected"><a href="lavepost.php">Opret en Artikel</a></li>
                    <li><a href="pro.html">Opdater en Artikel</a></li>
                    <li><a href="kon.html">Slet en Artikel</a></li>
                    <li style="float:right"><a href="index.html">Log ud</a></li>
                    <!--<li style="float:right"><a href="https://store.steampowered.com/">Steam </a></li>
                    <li style="float:right"><a href="https://en-gb.facebook.com/login/">Facebook</a></li>
                    <li style="float:right"><a href="https://twitter.com/">Twitter</a></li>-->
                </ul>
            </div><!--Slutning på min nav, søge ord Nav nav-->
            <div id="mainform"><!--Starten på min mainform, søge ord mainform Mainform--> 
                 
                <form action="loggedind.php" method="POST">
                    <button class="opretknap" type="submit">Tilbage</button>
                </form>
                <center><form action="lavepost.php" method="POST" >
                                    <h3>Overskrift</h3>
                                    <input type="text"  class="textboxsopret" name="overskrift" placeholder="Overskrift" required > <br/><br/>
                                   <!-- <h3>Uploade en thumbnail</h3>
                                    <input type="file" required="">-->
                                    <hr>
                                    <h3>Skriv din artikel her</h4>
                                    <center><textarea rows="30" name="atikeltext" cols="100" placeholder="Skriv din artikel her." required></textarea></center>
                                   <br/>
                                    <button class="opretknap" type="submit" name="GEM">Opret artikel</button>
                                </form></center>  
                        <center><div>
                                    <form method="POST" action="loggedind.php">
                                    <input class="opretknap" type="submit" name="logut" value="Cancel post">
                                    </form>
                        </div></center>
               
                
            </div><!--Slutning på min mainform, søge ord mainform Mainform-->
            <footer style="float:right">&copy; Copyright 2019 Victor Neerholt</footer>
        </div><!--Slut på min container div, Søge ord: Container container-->
    </body>
</html>











































