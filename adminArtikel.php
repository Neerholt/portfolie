<?php 
include 'databaseconn.php';
 $id = $_GET['id'];
 
 
 //Funktion som sikkrer at man skal være logget ind for at kunne til gå denne side
//selvom man har et link til siden!
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
                <center><h1><?php
                
                     $sql_tabel = "select * from opret where idopret='$id'"; 
                     $data = mysqli_query($connect,$sql_tabel);
                     $datacheck = mysqli_num_rows($data);
                     
                     if($data){
                         while ($row = mysqli_fetch_assoc($data)){
                             echo "ID: ".$row['idopret']. " | ";
                             echo $row['dato'];
                         }  
                     }  
                     
                     ?>
                    </h1></center>
            </div><!--Slutning på min mainheader, søge ord mainheader Mainheader-->
            <div id="nav"><!--Starten på min nav, søge ord Nav nav-->
                <ul>
                     <li><a href="loggedind.php">Admin Panel</a></li>
                    <li><a href="lavepost.php">Opret en Artikel</a></li>
                    <li><a href="updater.php">Opdater en Artikel</a></li>
                    <li><a href="slet.php">Slet en Artikel</a></li>
                     <li><a href="Opdaterkon.php">Opdater Kontakt</a></li>
                      <li><a href="pro.php">Se Opslag</a></li>
                     <li class="selected"><a href="#Nothing">Gennem se artikel</a></li>
                    <li style="float:right"><a href="index.php">Log ud</a></li>
                </ul>
            </div><!--Slutning på min nav, søge ord Nav nav-->
               
            </div><!--slutning på mit div kasse for min mainheader og min nav-->
            <div id="mainformlase"><!--Starten på min mainform, søge ord mainform Mainform-->
              
                <div id="billedelase"><!--Starte på min div billedelase-->
                    
               
                     <?php
                     $sql_tabel = "SELECT * FROM opret where idopret='$id'"; 
                     $data = mysqli_query($connect,$sql_tabel);
                     $datacheck = mysqli_num_rows($data);
                     
                     if($data){
                         while ($row = mysqli_fetch_assoc($data)){
                            echo "<img src='images/".$row['billede2']."' height='100%' width='100%'>";
                            echo "<a href='slet.php'><button class='tilbagelinkknapcss'>&#8617; Tilbage</button></a>"; 
                         }  
                     }
                     
                     ?>
                </div><!--sluting på min div billedelase-->
                
                <div id="overskriftpirnt">
                   <?php
                     $sql_tabel = "SELECT * FROM opret where idopret='$id'"; 
                     $data = mysqli_query($connect,$sql_tabel);
                     $datacheck = mysqli_num_rows($data);
                     
                     if($data){
                         while ($row = mysqli_fetch_assoc($data)){
                             echo "<center><h1>".$row['overskrift']."</h1></center>";
                         }  
                     }  
                     
                     ?>
                </div>
                
                <div id="artikelselv">
                     <?php
                     
                     
                     
                     $sql_tabel = "SELECT * FROM opret where idopret='$id'"; //Huske at lave det dynamisk
                     $data = mysqli_query($connect,$sql_tabel);
                     $datacheck = mysqli_num_rows($data);
                     
                     if($data){
                         while ($row = mysqli_fetch_assoc($data)){
                             echo $row['artikeltext'];
                         }  
                     }  
                     
                     ?>
                    
                </div>
                
                
                
                <div id="artikelfooter"><!--starten på min artikel footer-->
                    <?php
                     
                     $sql_tabel = "SELECT * FROM opret where idopret='$id'"; //Huske at lave det dynamisk
                     $data = mysqli_query($connect,$sql_tabel);
                     $datacheck = mysqli_num_rows($data);
                     
                     if($data){
                         while ($row = mysqli_fetch_assoc($data)){
                             echo "Uploadet den: ".$row['dato']." | ";
                             echo "<a href='".$row['gitlink']."'>Link til Github</a>"." | ";
                             echo 'Artikel skrevet af Victor Neerholt.';
                             //echo 'Github blev ikke brug til denne opgave.'; 
                         }  
                     }  
                     
                     ?>
                    
                </div><!--slutning på min artikel footer-->
                
                
            </div><!--Slutning på min mainform, søge ord mainform Mainform-->
           <!-- <footer style="float:right">&copy; Copyright <?php echo date("Y");?> Victor Neerholt</footer>-->
             <footer style="float:right">Website made by Victor Neerholt</footer>
        </div><!--Slut på min container div, Søge ord: Container container-->
    </body>
</html>

                     
