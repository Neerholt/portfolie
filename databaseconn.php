<?php
$servername = "localhost";
$username = "mvi01.skp-dp.sde";
$password = "23q3z5y5";
$databasename = "mvi01_skp_dp_sde_dk";

/*
$servername = 'localhost';
$username = 'root';
$password = '';
$databasename = 'mvi01_skp_dp_sde_dk';
<<<<<<< HEAD
*/
=======
$tabel_name='loginform'; */

>>>>>>> da3f2a214c7b22e65780a60e49188be9b0f41565

$connect = mysqli_connect($servername, $username, $password, $databasename);

if(!$connect){

    die("Connectiuon failed because" .mysqli_connect_error());

} 