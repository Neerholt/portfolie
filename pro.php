<?php include 'databaseconn.php'; ?>
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
                <center><h1>Projekter</h1></center>
            </div><!--Slutning på min mainheader, søge ord mainheader Mainheader-->
            <div id="nav"><!--Starten på min nav, søge ord Nav nav-->
                <ul>
                    <li><a href="index.php">Forside</a></li>
                    <li class="selected"><a href="pro.php">Projekter</a></li>
                    <li><a href="kon.php">Kontakt</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li style="float:right"><a href="https://steamcommunity.com/id/qvikke93steamaccount" target="_blank">Steam</a></li>
                    <li style="float:right"><a href="#">Facebook</a></li>
                    <li style="float:right"><a href="https://twitter.com/qvikke93" target="_blank">Twitter</a></li>
                    <li style="float:right"><a href="#">Linkedin</a></li>
                    <li style="float:right"><a href="#">Praktikpladsen</a></li>
                </ul>
            </div><!--Slutning på min nav, søge ord Nav nav-->
               
            </div><!--slutning på mit div kasse for min mainheader og min nav-->
            
            
                 <div id="sog"><!--Starten på min søg funktion, søge ord Søg søg Sog sog-->
                   <form action="" method="">
                       <input type="text" name="" placeholder="Lave en live search på et projekt..." class="sogtextboxs" style="width:70%" disabled> <!--Enable disable hvis søg virker required huske!-->
                       <button class="sogknapcss" type="submit" style="float:right" name="" disabled>Søg</button> <!--Enable disable hvis søg virker-->
                    </form>
                    <hr>
                </div><!--Sluting på min søg funktion, søge ord Søg søg Sog sog-->
            
           
            <div id="mainformpro"><!--Starten på min mainform, søge ord mainform Mainform-->
              
                
                <div class="ex1">
                           <?php
                     $sql_tabel = "SELECT * FROM opret order by idopret desc limit 400"; 
                     $data = mysqli_query($connect,$sql_tabel);
                     $datacheck = mysqli_num_rows($data);
                     
                     if($data){
                         while ($row = mysqli_fetch_assoc($data)){
                            echo '<div id="textkasse">';
                             echo "<img src='images/".$row['billede']."' height='55%' width='100%'>";
                             echo '<div id="overskriftcss">';
                             echo "<h4><strong>".$row['overskrift']."</strong></h4>";
                             echo '</div>';
                             echo '<div id="kassebrodtekst">';
                             echo $row['brodtekst']."...";
                             echo '</div>';
                             echo '<div id="artikellink">';
                             echo "<a href=\"artikel.php?id=". $row['idopret'] . "\"><button class='linkknapcss'>Læse hele artiklen?</button></a>"; 
                             echo '</div>';
                             echo '</div>';
                         }  
                     }  
                     
                     ?>
                   </div>
        </div><!--Slut på min container div, Søge ord: Container container-->
        <!-- <footer style="float:right">&copy; Copyright <?php echo date("Y");?> Victor Neerholt</footer>-->
         <footer style="float:right">Website made by Victor Neerholt</footer>
    </body>
</html>