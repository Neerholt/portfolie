<?php include 'databaseconn.php'; ?>
<html>
    <head>
        <title>Portfolie-Projekter</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="stylecss.css">
    </head>
    <body>
        <div id="container"><!--Starten på min container div, Søge ord: Container container-->
            <div id="mainheader"><!--Starten på min mainheader, søge ord mainheader Mainheader-->
                <center><h1><font size="30">Projektere</font></h1></center>
            </div><!--Slutning på min mainheader, søge ord mainheader Mainheader-->
            <div id="nav"><!--Starten på min nav, søge ord Nav nav-->
                <ul>
                    <li><a href="index.php">Forside</a></li>
                    <li class="selected"><a href="pro.html" >Alle Projekter</a></li>
                    <li><a href="kon.php">Kontakt</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li style="float:right"><a href="https://store.steampowered.com/">Steam </a></li>
                    <li style="float:right"><a href="https://en-gb.facebook.com/login/">Facebook</a></li>
                    <li style="float:right"><a href="https://twitter.com/">Twitter</a></li>
                </ul>
            </div><!--Slutning på min nav, søge ord Nav nav-->
            <div id="mainform"><!--Starten på min mainform, søge ord mainform Mainform-->
                <div class="ex1">
                        <?php
                     $sql_tabel = "SELECT * FROM opret;"; 
                     $data = mysqli_query($connect,$sql_tabel);
                     $datacheck = mysqli_num_rows($data);
                     
                     if($data){
                         while ($row = mysqli_fetch_assoc($data)){
                             echo '<div id="textkasse">';
                             echo '<img height="250" width="300" src="img/hjemmesidebaggrund.JPG'.$row['billede'].' "> ';
                            // echo '&nbsp;';
                             echo $row['overskrift'];
                             //echo '<br>';
                             //echo $row['dato'];
                             //echo '<br>';
                             echo '&nbsp;';
                             echo $row['atikeltext'];
                             echo '</div>';
                         }  
                     } 
                     
                     ?>
                   </div>
            <footer style="float:right">&copy; Copyright <?php echo date("Y");?> Victor Neerholt</footer>
        </div><!--Slut på min container div, Søge ord: Container container-->
    </body>
</html>
