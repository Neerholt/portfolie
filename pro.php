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
                    <li class="selected"><a href="pro.html" >Projekter</a></li>
                    <li><a href="kon.php">Kontakt</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li style="float:right"><a href="#IdoNothingYet">Steam </a></li>
                    <li style="float:right"><a href="#IdoNothingYet">Facebook</a></li>
                    <li style="float:right"><a href="#IdoNothingYet">Twitter</a></li>
                     <li style="float:right"><a href="#IdoNothingYet">Linkedin</a></li>
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
                            echo "<img src='images/".$row['billede']."' height='50%' width='100%'>";
                             //Dette billede skal kunne hentes fra databasen og skal ikke være prefix
                             //Dette er bare et exsempel på hvordan jeg gerne vil have det skal se ud!
                            // echo '&nbsp;';
                             echo "<h4><font size='4%'>".$row['overskrift']."</font></h4>";
                             //echo '<br>';
                             //echo $row['dato'];
                             //echo '<br>';
                             //echo $row['atikeltext'];
                             echo "<font size='3%'>".$row['brodtekst']."</font>";
                             echo '<br>';
                             echo "<font size='3%'><a href='#Nothing'>Læse mere...</a></font>";
                             //Det her er bare n test på hvordan jeg gerne vil have det skal se ude
                             //Det skal laves sådan at det link over denne tekst linker til en ny side hvor
                             //man kan læse hele artiklen!
                             echo '</div>';
                         }  
                     } 
                     
                     ?>
                   </div>
            <footer style="float:right">&copy; Copyright <?php echo date("Y");?> Victor Neerholt</footer>
        </div><!--Slut på min container div, Søge ord: Container container-->
    </body>
</html>
