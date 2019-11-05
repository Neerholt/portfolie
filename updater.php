<?php 
//Includer databasen.
include 'databaseconn.php';

 $nyoverskrift = "";
 $nyartikeltext = "";
 $nybrodtekst = "";      
 $nygit = ""; 


//Funktion som søger på artikel data fra databasen.
if(isset($_POST['sogopdater'])){
    
     $id = $_POST['idsog'];
    
     $sql_tabel = "SELECT overskrift, artikeltext, brodtekst, gitlink FROM opret WHERE idopret= $id LIMIT 1"; 
     $data = mysqli_query($connect,$sql_tabel);
                     
        while ($row = mysqli_fetch_assoc($data)){
        $nyoverskrift = ['overskrift'];
        $nyartikeltext = ['artikeltext'];
        $nybrodtekst = ['brodtekst'];
        $nygit = ['gitlink'];  
    } 
    mysqli_close($connect);  
}  
        


//Funktion til at opdater et artikel.
if(isset($_POST['opdater'])){
  
$billede = $_FILES['imagess']['name'];
$billede1 = $_FILES['imagesss']['name'];
$overskrift = $_POST ['overskrift'];
$artikeltext = $_POST ['artikeltext'];
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


mysqli_close($connect);

}
?>    

<?php
session_start();
if(!isset($_SESSION['login'])){
    header("location:index.php");
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
                <center><h1>Opdater Artikel</h1></center>
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
               
            </div><!--slutning på mit div kasse for min mainheader og min nav-->
            <div id="mainform"><!--Starten på min mainform, søge ord mainform Mainform--> 
                <center><form action="" method="POST" enctype="multipart/form-data">
                        <div id="lavevenster"><!--starten på min side form på lavepost-->
                             <h3>Overskrift</h3>
                             <input type="text"  class="textboxsopret" name="overskrift" value="<?php print $nyoverskrift;?>" maxlength="20" ><br/><br/>
                                    <hr>
                                    <h3>Brødtekst</h3>
                                    <center><textarea rows="3%" class="textboxsopret" name="brodtekst"cols="40%" value="<?php echo var_dump($nybrodtekst);?>"  maxlength="75" ></textarea></center><br/>
                                    <hr>
                                     <h3>Project link fra Github</h3>
                                     <input type="text"  class="textboxsopret" name="gitlink" value="<?php echo var_dump($nygit);?>">
                                    <p>Include Github link?</p>
                                    <label>Ja</label><input type="checkbox" name="checkyes" >
                                    <label>Nej</label><input type="checkbox" name="checkno" checked>
                                    <hr>
                                  <h3>Uploade billeder</h3>
                                  <label>Uploade et brødtekst billede:<br/></label><input type="file" name="imagess" ><br/><br/>
                                  <label>Uploade et artikel billede:<br/></label><input type="file" name="imagesss" ><br/><br/>
                                  <hr>
                                  <h3>Søg på en artikle</h3>
                                  <input type="number"  class="textboxssog" name="idsog" placeholder="Søg...">
                                  <button class="sogknapopdaterpro" type="submit" name="sogopdater">Søg</button>
                        </div><!--sluting på min side form på lavepost-->
                        
                                    <hr>
                                    <h3>Skriv din artikel her</h4>
                                    <center><textarea rows="22%" name="artikeltext" cols="80%" style="width:50%; height: 80%;" value="teat" maxlength="1800" ></textarea></center>    
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