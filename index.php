<?php include 'databaseconn.php';?>
<html>
    <head>
        <title>Portfolie-Forside</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="stylecss.css">
    </head>
    <body>
        <div id="container"><!--Starten på min container div, Søge ord: Container container-->
            <div id="mainheader"><!--Starten på min mainheader, søge ord mainheader Mainheader-->
                <center><h1><font size="30">Victor Neerholt's Portfolie</font></h1></center>
            </div><!--Slutning på min mainheader, søge ord mainheader Mainheader-->
            <div id="nav"><!--Starten på min nav, søge ord Nav nav-->
                <ul>
                    <li class="selected"><a href="index.html">Forside</a></li>
                    <li><a href="pro.php">Alle Projekter</a></li>
                    <li><a href="kon.php">Kontakt</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li style="float:right"><a href="https://store.steampowered.com/">Steam </a></li>
                    <li style="float:right"><a href="https://en-gb.facebook.com/login/">Facebook</a></li>
                    <li style="float:right"><a href="https://twitter.com/">Twitter</a></li>
                </ul>
            </div><!--Slutning på min nav, søge ord Nav nav-->
            <div id="mainform"><!--Starten på min mainform, søge ord mainform Mainform-->
                <table>
                    <tr>
                        <?php
                     $sql_tabel = "SELECT * FROM opret;"; 
                     $data = mysqli_query($connect,$sql_tabel);
                     $datacheck = mysqli_num_rows($data);
                     
                     if($data){
                         while ($row = mysqli_fetch_assoc($data)){
                             echo $row['overskrift'];
                             echo '<br>';
                             echo $row['billede'];
                             echo '<br>';
                             echo 'Timestamp&nbsp;';
                             echo $row['dato'];
                             echo '<br><br>';
                             echo $row['atikeltext'];
                             echo '<hr>';
                         }  
                     } 
                     
                     ?>
                    </tr>
                    <tr>
                        <th>Test</th>
                        <th>Test</th>
                    </tr>
                </table>
            </div><!--Slutning på min mainform, søge ord mainform Mainform-->
            <footer style="float:right">&copy; Copyright 2019 Victor Neerholt</footer>
        </div><!--Slut på min container div, Søge ord: Container container-->
    </body>
</html>
