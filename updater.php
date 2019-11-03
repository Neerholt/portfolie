<?php 
include 'databaseconn.php';


if(isset($_POST['GEM'])){
  


$billede = $_FILES['imagess']['name'];
$billede1 = $_FILES['imagesss']['name'];
$overskrift = $_POST ['overskrift'];
$atikeltext = $_POST ['atikeltext'];
$brodtekst = $_POST ['brodtekst'];
$git = $_POST['gitlink'];


$target = 'images/';

 
$connect = mysqli_connect($servername, $username, $password, $databasename);


if(!$connect){
    die("Connectiuon failed because" .mysqli_connect_error());
} 

$sql_tabel = "INSERT INTO `opret`(`idopret`, `overskrift`, `billede`, `atikeltext`, `dato`, `brodtekst`, `billede2`, `gitlink`) VALUES (NULL,'$overskrift','$billede','$atikeltext',NULL,'$brodtekst','$billede1','$git')";

$data = mysqli_query($connect,$sql_tabel);

 move_uploaded_file($_FILES['imagess']['tmp_name'],$target.$billede);
 move_uploaded_file($_FILES['imagesss']['tmp_name'],$target.$billede1);


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
        <title>Portfolie</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="stylecss.css">
    </head>
    <body>
        <div id="container"><!--Starten på min container div, Søge ord: Container container-->
            <div id="mainheader"><!--Starten på min mainheader, søge ord mainheader Mainheader-->
                <center><h1>Opdater Artikel</font></h1></center>
            </div><!--Slutning på min mainheader, søge ord mainheader Mainheader-->
            <div id="nav"><!--Starten på min nav, søge ord Nav nav-->
                <ul>
                    <li><a href="loggedind.php">Admin Panel</a></li>
                    <li><a href="lavepost.php">Opret en Artikel</a></li>
                    <li class="selected"><a href="updater.php">Opdater en Artikel</a></li>
                    <li><a href="slet.php">Slet en Artikel</a></li>
                     <li><a href="Opdaterkon.php">Opdater Kontakt</a></li>
                      <li><a href="pro.php">Se Opslag</a></li>
                    <li style="float:right"><a href="index.php">Log ud</a></li>
                </ul>
            </div><!--Slutning på min nav, søge ord Nav nav-->
            <div id="mainform"><!--Starten på min mainform, søge ord mainform Mainform--> 
                <center><form action="lavepost.php" method="POST" enctype="multipart/form-data">
                        
                        
                        <div id="lavevenster"><!--starten på min side form på lavepost-->
                             <h3>Opdater Overskrift</h3>
                                    <input type="text"  class="textboxsopret" name="overskrift" placeholder="Skriv en ny overskrift" maxlength="20" required ><br/><br/>
                                    <hr>
                                    <h3>Opdater Brødtekst</h3>
                                    <center><textarea rows="3%" class="textboxsopret" name="brodtekst"cols="40%" placeholder="Skrive en ny brødtekst til din artikel"  maxlength="75" required></textarea></center><br/>
                                    <hr>
                                     <h3>Project link fra Github</h3>
                                    <input type="text"  class="textboxsopret" name="gitlink" placeholder="Link dit project fra github">
                                    <p>Include Github link?</p>
                                    <label>Ja</label><input type="checkbox" name="checkyes" >
                                    <label>Nej</label><input type="checkbox" name="checkno" checked>
                                    <hr>
                                  <h3>Opdater Uploade billeder</h3>
                                  <label>Uploade et nyt brødtekst billede:<br/></label><input type="file" name="imagess" required><br/><br/>
                                  <label>Uploade et nyt artikel billede:<br/></label><input type="file" name="imagesss" required><br/><br/>
                                  <hr>
                                  <h3>Søg på den artikle du vil opdater</h3>
                                  <input type="number"  class="textboxsopret" name="" placeholder="Søg...">
                        </div><!--sluting på min side form på lavepost-->
                        
                                    <hr>
                                    <h3>Opdater artikel</h4>
                                    <center><textarea rows="22%" name="atikeltext" cols="80%" style="width:50%; height: 80%;" placeholder="Skriv din artikel her." maxlength="1800" required></textarea></center>    
                                    <button class="opretknap" onclick="sendbesked" type="submit" name="GEM">Opdater</button>
                                </form></center>  
                        <center><div>
                                    <form method="POST" action="loggedind.php">
                                    <input class="cancelknap" type="submit" name="logut" value="Cancel">
                                    </form>
                        </div></center>
               
                
            </div><!--Slutning på min mainform, søge ord mainform Mainform-->
           <!-- <footer style="float:right">&copy; Copyright <?php echo date("Y");?> Victor Neerholt</footer>-->
             <footer style="float:right">Website made by Victor Neerholt</footer>
        </div><!--Slut på min container div, Søge ord: Container container-->
    </body>
</html>