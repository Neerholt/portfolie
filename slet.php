<?php
//Slet funktion
if(isset($_POST['slet'])){
    
include 'databaseconn.php';
    
$id = $_POST['id'];

$connect = mysqli_connect($servername, $username, $password, $databasename);

if(!$connect){
    die("Connectiuon failed because" .mysqli_connect_error());
} 

$sql_tabel = "DELETE FROM `opret` WHERE id='$id'";

$data = mysqli_query($connect,$sql_tabel);

mysqli_close($connect);

header("Refresh:1; url=slet.php");

}





session_start();
if(!isset($_SESSION['login'])){
    header("location:index.html");
    exit;
}

?>
<html>
    <head>
        <title>Portfolie/Slet Artikel</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="stylecss.css">
    </head>
    <body>
        <div id="container"><!--Starten på min container div, Søge ord: Container container-->
            <div id="mainheader"><!--Starten på min mainheader, søge ord mainheader Mainheader-->
                <center><h1>Slet Artikel</font></h1></center>
            </div><!--Slutning på min mainheader, søge ord mainheader Mainheader-->
            <div id="nav"><!--Starten på min nav, søge ord Nav nav-->
                <ul>
                    <li><a href="loggedind.php">Admin Panel</a></li>
                    <li><a href="lavepost.php">Opret en Artikel</a></li>
                    <li><a href="updater.php">Opdater en Artikel</a></li>
                    <li class="selected"><a href="slet.php">Slet en Artikel</a></li>
                     <li><a href="Opdaterkon.php">Opdater Kontakt</a></li>
                    <li><a href="pro.php">Se Opslag</a></li>
                    <li style="float:right"><a href="index.php">Log ud</a></li>
                </ul>
            </div><!--Slutning på min nav, søge ord Nav nav-->
            <div id="mainform"><!--Starten på min mainform, søge ord mainform Mainform--> 
                
                <div id="sletform"><!--Starten på min sletform, søg ord Sletform sletform-->
                 <center><h1>Slet Artikel</h1></center>
                 <center><hr align="center" width="90%"></center>
                 <br/>  
                 <center> <form action="" method="POST">
                         <input type="number" name="id" placeholder="ID nummer"  style="width:60%" required=""><br/><br/>
                    <button class="opdaterknapcss" type="submit" name="slet">Slet</button>     
                     </form></center>
                 
                 
                 
                </div><!--slutning på min sletform, søg ord Sletform sletform-->
                 
                <div id="sletformartikelside"><!--starten på min side hvor jeg kan browse de artikel jeg har skrevet for at se hvad jeg skal slette-->
                    <div class="ex1">
                        <?php
                        include 'databaseconn.php';
                     $sql_tabel = "SELECT * FROM opret;"; 
                     $data = mysqli_query($connect,$sql_tabel);
                     $datacheck = mysqli_num_rows($data);
                     
                     if($data){
                         while ($row = mysqli_fetch_assoc($data)){
                            echo '<div id="textkasse">';
                            echo "<img src='images/".$row['billede']."' height='60%' width='100%'>";
                             echo "<h4><strong> &nbsp;".$row['overskrift']."</strong></h4>";
                             //echo $row['brodtekst']."...";
                             echo '<br>';
                             echo "&nbsp; ID: ".$row['ID'];
                             echo '<br><br>';
                             echo " &nbsp;".$row['dato'];
                             echo '</div>';
                         }  
                     } 
                     
                     ?>
                   </div>
                    
                </div><!--slutnign på min side hvor jeg kan browse de artikel jeg har skrevet for at se hvad jeg skal slette-->
                
                
             
            </div><!--Slutning på min mainform, søge ord mainform Mainform-->
            <footer style="float:right">&copy; Copyright <?php echo date("Y");?> Victor Neerholt</footer>
        </div><!--Slut på min container div, Søge ord: Container container-->
    </body>
</html>




 






































