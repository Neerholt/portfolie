<?php 
//Starten på min opdater kontakt oplysninger senderform code ting :)
if(isset($_POST['OPKO'])){

include 'databaseconn.php';
    
$mail = $_POST['mail'];
$tf = $_POST['tf'];
$bo = $_POST['bo'];
$post = $_POST['post'];
$bynavn = $_POST['by'];

$connect = mysqli_connect($servername, $username, $password, $databasename);

if(!$connect){
    die("Connectiuon failed because" .mysqli_connect_error());
} 

$sql_tabel = "UPDATE kontaktop SET ID= NULL,mail='$mail',tf='$tf',bo='$bo',post='$post',bynavn='$bynavn'";

$data = mysqli_query($connect,$sql_tabel);

mysqli_close($connect);
}

//Starten på min opdater arbejdsmorade senderform code ting :)
if(isset($_POST['OPA'])){

include 'databaseconn.php';
    
$a = $_POST['a'];
$r = $_POST['r'];
$b = $_POST['b'];
$e = $_POST['e'];
$j = $_POST['j'];
$d = $_POST['d'];
$t = $_POST['t'];

$connect = mysqli_connect($servername, $username, $password, $databasename);

if(!$connect){
    die("Connectiuon failed because" .mysqli_connect_error());
} 

$sql_tabel = "UPDATE arbejde SET ID=NULL,a='$a',r='$r',b='$b',e='$e',j='$j',d='$d',t='$t'";

$data = mysqli_query($connect,$sql_tabel);

mysqli_close($connect);
}

//Funktion som sikkrer at man skal være logget ind for at kunne til gå denne side
//selvom man har et link til siden!
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
                <center><h1><font size="30">Updater Kontakt Oplysninger</font></h1></center>
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
                    
                    <center><form action="" method="POST">
                            <h3>Opdater mail</h3>
                            <input type="text" name="mail" placeholder="Opdater Mail" class="textboxsopret"> 
                            <h3>Opdater Telefonnummer</h3>
                            <input type="number" name="tf" placeholder="Opdater Telefonnummer" maxlength="8" class="textboxsopret"> 
                            <h3>Opdater bopæl</h3>
                            <input type="text" name="bo" placeholder="Opdater Bopæl" class="textboxsopret"> 
                            <h3>Opdater Postnummer</h3>
                            <input type="number" name="post" placeholder="Opdater Postnummer" maxlength="4" class="textboxsopret"> 
                            <h3>Opdater By</h3>
                            <input type="text" name="by" placeholder="Opdater By" class="textboxsopret">
                            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                             <center><hr align="center" width="100%"></center>
                              <button class="opdaterknapcss" type="submit" name="OPKO">Opdater Kontakt Oplysninger</button> 
                    </form></center>
                   
                    
                   
                    
                </div><!--slutning på min personligform. søge ord personlig Personlig-->
                <div id="arbejdeop"><!--starten på min arbejdefom, søge ord arbejde Arbejde-->
                     <center><h1>Opdater Arbejdsområder</h1></center>
                    <center><hr align="center" width="100%"></center>
                     
                    <!--Linje
                    <svg height="100%">
                    <line y2="100%" style="stroke:rgb(0,0,0);stroke-width:2" />
                    </svg>-->
                    
                   
                    
                    <center> <form action="" method="POST">
                            <h3>Opdater Arbejdsområder 1</h3>
                    <input type="text" name="a" placeholder="Opdater arbejdsområde" class="textboxsopret"> 
                    <h3>Opdater Arbejdsområder 2</h3>
                    <input type="text" name="r" placeholder="Opdater arbejdsområde" class="textboxsopret"> 
                    <h3>Opdater Arbejdsområder 3</h3>
                    <input type="text" name="b" placeholder="Opdater arbejdsområde" class="textboxsopret"> 
                    <h3>Opdater Arbejdsområder 4</h3>
                    <input type="text" name="e" placeholder="Opdater arbejdsområde" class="textboxsopret"> 
                    <h3>Opdater Arbejdsområder 5</h3>
                    <input type="text" name="j" placeholder="Opdater arbejdsområde" class="textboxsopret"> 
                    <h3>Opdater Arbejdsområder 6</h3>
                    <input type="text" name="d" placeholder="Opdater arbejdsområde" class="textboxsopret"> 
                    <h3>Opdater Arbejdsområder 7</h3>
                    <input type="text" name="t" placeholder="Opdater arbejdsområde" class="textboxsopret">    
                    <center><hr align="center" width="100%"></center>
                    <button class="opdaterknapcss" type="submit" name="OPA">Opdater arbejdsområde</button>     
                        </form>   </center>
                  
                 
                    
                </div><!--slutning på min arbejdefom, søge ord arbejde Arbejde-->
                <div id="Aboutmeop"><!--starten på aboutmeformen, søge ord Aboutme aboutme-->
                    <center><h1>Opdater Omkring mig</h1></center>
                    <center><hr align="center" width="100%"></center>
                    
                    <!--Linje
                    <svg height="100%">
                    <line y2="100%" style="stroke:rgb(0,0,0);stroke-width:2" />
                    </svg>-->
                    
                    <center> <form action="" method="POST">
                        <h3>Opdater Omkring mig</h4>
                      <center><textarea rows="38%" name="omkring" cols="45%" placeholder="Skriv din opdatering af omkring mig ." required></textarea></center> 
                      <center><hr align="center" width="100%"></center>
                      <button class="opdaterknapcss" onclick="sendbesked" type="submit" name="OPOM">Opdater omkring</button><!--Mangler css-->
                        </form></center>
                    
                </div><!--slutning på aboutmeformen, søge ord Aboutme aboutme-->
                
            </div><!--Slutning på min mainform, søge ord mainform Mainform-->
            <footer style="float:right">&copy; Copyright <?php echo date("Y");?> Victor Neerholt</footer>
        </div><!--Slut på min container div, Søge ord: Container container-->
    </body>
</html>



