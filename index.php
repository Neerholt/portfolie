<?php include 'databaseconn.php';?>
<html>
    <head>
        <title>Portfolie/Forside</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="stylecss.css">
    </head>
    <body>
        <div id="container"><!--Starten på min container div, Søge ord: Container container-->
            <div id="mainheader"><!--Starten på min mainheader, søge ord mainheader Mainheader-->
                <center><h1>Victor Neerholt's Portfolie</font></h1></center>
            </div><!--Slutning på min mainheader, søge ord mainheader Mainheader-->
            <div id="nav"><!--Starten på min nav, søge ord Nav nav-->
                <ul>
                    <li class="selected"><a href="index.php">Forside</a></li>
                    <li><a href="pro.php">Projekter</a></li>
                    <li><a href="kon.php">Kontakt</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li style="float:right"><a href="#IdoNothingYet">Steam</a></li>
                    <li style="float:right"><a href="#IdoNothingYet">Facebook</a></li>
                    <li style="float:right"><a href="#IdoNothingYet">Twitter</a></li>
                    <li style="float:right"><a href="#IdoNothingYet">Linkedin</a></li>
                    <li style="float:right"><a href="#IdoNothingYet">Praktikpladsen</a></li>
                </ul>
            </div><!--Slutning på min nav, søge ord Nav nav-->
            <div id="mainform"><!--Starten på min mainform, søge ord mainform Mainform-->
                
                
                <div id="indexleft"><!--Starten på mit div til venster side på index side-->
                     <center><h1>Anbefalet Artikler</h1></center>
                    <center><hr align="center" width="75%"></center>
                    
                      <?php
                     $sql_tabel = "SELECT * FROM opret limit 2"; 
                     $data = mysqli_query($connect,$sql_tabel);
                     $datacheck = mysqli_num_rows($data);
                     
                     if($data){
                         while ($row = mysqli_fetch_assoc($data)){
                             echo '<div id="textkassebofloat">';
                             echo "<img src='images/".$row['billede']."' height='55%' width='100%'>";
                             echo '<div id="overskriftcss">';
                             echo "<h4><strong>&nbsp;".$row['overskrift']."</strong></h4>";
                             echo '</div>';
                             echo '<div id="kassebrodtekst">';
                             echo $row['brodtekst']."...";
                             echo '</div>';
                             echo '<div id="artikellink">';
                             echo "<a href=\"artikel.php?id=". $row['idopret'] . "\"><button>Link Text</button></a>";
                             echo '</div>';
                             echo '</div>';
                         }  
                     }  
                     
                     ?>
                    
                </div><!--slutning på mit div til venster side på index side-->
                
                
                
                
                
                <div id="formainindex"><!--Starten på min main indexform-->
                    <center><h1>Velkommen til min portfolie hjemmeside</h1></center>
                     <center><hr align="center" width="90%"></center>
                     <center><h2 class="borderting">Omkring denne hjemmesiden.</h2></center>
                     
                     <center><form class="spg1">
                             <p>Test Test Test TestTest TestTest TestTest TestTest TestTest TestTest Test</p>
                             <a href="#"><button class="testfortest" >Link Text</button></a>

                             <!--Du er ved at lave noget css til en link knap-->
                             
                            
                         </form></center>
                  
                </div><!--slutning på min main form index-->
              
                
                
                
                
                
                
                
                <div id="anbefaling"><!--Starten  på mit div anbefaling-->
                    <center><h1>Ny Artikler</h1></center>
                    <center><hr align="center" width="75%"></center>
                    
                      <?php
                     $sql_tabel = "SELECT * FROM opret order by idopret desc limit 2"; 
                     $data = mysqli_query($connect,$sql_tabel);
                     $datacheck = mysqli_num_rows($data);
                     
                     if($data){
                         while ($row = mysqli_fetch_assoc($data)){
                             echo '<div id="textkassebofloat">';
                             echo "<img src='images/".$row['billede']."' height='55%' width='100%'>";
                             echo '<div id="overskriftcss">';
                             echo "<h4><strong>&nbsp;".$row['overskrift']."</strong></h4>";
                             echo '</div>';
                             echo '<div id="kassebrodtekst">';
                             echo $row['brodtekst']."...";
                             echo '</div>';
                             echo '<div id="artikellink">';
                             echo "<a href=\"artikel.php?id=". $row['idopret'] . "\">Læse mere?</a>";
                             echo '</div>';
                             echo '</div>';
                         }  
                     }  
                     
                     ?>
                    
                </div><!--Slutning på min div anbefaling-->

                
                
                
               
                
                  
            </div><!--Slutning på min mainform, søge ord mainform Mainform-->
           <!-- <footer style="float:right">&copy; Copyright <?php echo date("Y");?> Victor Neerholt</footer>-->
             <footer style="float:right">Website made by Victor Neerholt</footer>
        </div><!--Slut på min container div, Søge ord: Container container-->
    </body>
</html>
