<?php
session_start();
if(!isset($_SESSION['login'])){
    header("location:index.html");
    exit;
}   
?>
<html>
    <head>
        <title>Admin Panel</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="stylecss.css">
    </head>
    <body>
        <div id="container"><!--Starten på min container div, Søge ord: Container container-->
            <div id="mainheader"><!--Starten på min mainheader, søge ord mainheader Mainheader-->
                <center><h1><font size="30">Admin Panel</font></h1></center>
            </div><!--Slutning på min mainheader, søge ord mainheader Mainheader-->
            <div id="nav"><!--Starten på min nav, søge ord Nav nav-->
                <ul>
                    <li><a href="index.html">Forside</a></li>
                    <li><a href="pro.html">Projektere</a></li>
                    <li><a href="kon.html">Kontakt</a></li>
                    <li><a href="index.html">Log ud</a></li>
                    <li style="float:right"><a href="https://store.steampowered.com/">Steam </a></li>
                    <li style="float:right"><a href="https://en-gb.facebook.com/login/">Facebook</a></li>
                    <li style="float:right"><a href="https://twitter.com/">Twitter</a></li>
                </ul>
            </div><!--Slutning på min nav, søge ord Nav nav-->
            <div id="mainform"><!--Starten på min mainform, søge ord mainform Mainform-->
                
                <form action="lavepost.php" method="POST">
                    <input type="submit" value="Lave en post">   
                </form>
               
                
            </div><!--Slutning på min mainform, søge ord mainform Mainform-->
            <footer style="float:right">&copy; Copyright 2019 Victor Neerholt</footer>
        </div><!--Slut på min container div, Søge ord: Container container-->
    </body>
</html>
