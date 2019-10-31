<?php
$servername = 'neerholt.it.mysql';
$username = 'neerholt_it';
$password = 'Mejerivej2';
$databasename = 'neerholt_it';

$connect = mysqli_connect($servername, $username, $password, $databasename);

if(!$connect){

    die("Connectiuon failed because" .mysqli_connect_error());

} 