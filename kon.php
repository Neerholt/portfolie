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
            <div id="mainheader"><!--Starten på min mainheader, søge ord mainheader Mainheader-->
                <center><h1>Kontakt mig</font></h1></center>
            </div><!--Slutning på min mainheader, søge ord mainheader Mainheader-->
            <div id="nav"><!--Starten på min nav, søge ord Nav nav-->
                <ul>
                    <li><a href="index.php">Forside</a></li>
                    <li><a href="pro.php">Projekter</a></li>
                    <li class="selected"><a href="kon.html">Kontakt</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li style="float:right"><a href="https://steamcommunity.com/id/qvikke93steamaccount">Steam </a></li>
                    <li style="float:right"><a href="#IdoNothingYet">Facebook</a></li>
                    <li style="float:right"><a href="#IdoNothingYet">Twitter</a></li>
                    <li style="float:right"><a href="#IdoNothingYet">Linkedin</a></li>
                     <li style="float:right"><a href="#IdoNothingYet">Praktikpladsen</a></li>
                </ul>
            </div><!--Slutning på min nav, søge ord Nav nav-->
            <div id="mainform"><!--Starten på min mainform, søge ord mainform Mainform-->
                <div id="personlig"><!--Starten på min personligform. søge ord personlig Personlig-->
                    <center><h1>Kontakt oplysinger</h1></center>
                    <center><hr align="center" width="90%"></center>
                    
                    
                     <?php
                     $sql_tabel = "SELECT * FROM kontaktop;"; 
                     $data = mysqli_query($connect,$sql_tabel);
                     $datacheck = mysqli_num_rows($data);
                     
                     if($data){
                         while ($row = mysqli_fetch_assoc($data)){
                             echo '<center><h3> Mail: '.$row['mail'].'</h3></center>';
                             echo '<center><h3> Mobil: '.$row['tf'].'</h3></center>';
                             echo '<center><h3> Address: '.$row['bo'].'</h3></center>';
                             echo '<center><h3> Postnummer: '.$row['post'].'</h3></center>';
                             echo '<center><h3> Bynanv: '.$row['bynavn'].'</h3></center>';
                         }  
                     } 
                     ?>
                    
                    
                    
                    
                </div><!--slutning på min personligform. søge ord personlig Personlig-->
                <div id="arbejde"><!--starten på min arbejdefom, søge ord arbejde Arbejde-->
                     <center><h1>Arbejdsområder</h1></center>
                    <center><hr align="center" width="90%"></center>
                   
                    
                      <?php
                     $sql_tabel = "SELECT * FROM arbejde;"; 
                     $data = mysqli_query($connect,$sql_tabel);
                     $datacheck = mysqli_num_rows($data);
                     
                     if($data){
                         while ($row = mysqli_fetch_assoc($data)){
                             echo '<center><h3>'.$row['a'].'</h3></center>';//1
                              echo '<center><h3>'.$row['r'].'</h3></center>';//2
                               echo '<center><h3>'.$row['b'].'</h3></center>';//3
                                echo '<center><h3>'.$row['e'].'</h3></center>';//4
                                 echo '<center><h3>'.$row['j'].'</h3></center>';//5
                                  echo '<center><h3>'.$row['d'].'</h3></center>';//6
                                   echo '<center><h3>'.$row['t'].'</h3></center>';//7 Test punkt
                                    echo '<center><h3>'.$row['z'].'</h3></center>';//8
                                     echo '<center><h3>'.$row['x'].'</h3></center>';//9
                                      echo '<center><h3>'.$row['c'].'</h3></center>';//10
                                       echo '<center><h3>'.$row['o'].'</h3></center>';//11
                                        echo '<center><h3>'.$row['p'].'</h3></center>';//12
                                         echo '<center><h3>'.$row['u'].'</h3></center>';//13
                                          echo '<center><h3>'.$row['g'].'</h3></center>';//14
                                    echo '<center><p>Se alle mine arbejdsområder på <a href="https://www.praktikpladsen.dk/">praktikpldasen.dk</a></p></center>';
                                  
                         }  
                     } 
                     ?>
                    
                    
                    
                </div><!--slutning på min arbejdefom, søge ord arbejde Arbejde-->
                <div id="Aboutme"><!--starten på aboutmeformen, søge ord Aboutme aboutme-->
                    <center><h1>Omkring mig</h1></center>
                    <center><hr align="center" width="90%"></center>
                    
                   <div id="beskedboxs">
                       

                     <?php
                     $sql_tabel = "SELECT * FROM opdaterbesked;"; 
                     $data = mysqli_query($connect,$sql_tabel);
                     $datacheck = mysqli_num_rows($data);
                     
                     if($data){
                         while ($row = mysqli_fetch_assoc($data)){
                             echo '<center><h4>'.$row['opdaterbesked'].'</h4></center>';//1
                       
                                  
                         }  
                     } 
                     ?>
                        
                        </div>
                    
                      
                    
                </div><!--slutning på aboutmeformen, søge ord Aboutme aboutme-->
            </div><!--Slutning på min mainform, søge ord mainform Mainform-->
           <!--<footer style="float:right">&copy; Copyright <?php echo date("Y");?> Victor Neerholt</footer>-->
             <footer style="float:right">Website made by Victor Neerholt</footer>
        </div><!--Slut på min container div, Søge ord: Container container-->
    </body>
</html>

