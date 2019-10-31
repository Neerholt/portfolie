<?php 

session_start();
$hostname="localhost"; //Host navn på min database.
$username="root"; //standard brugernavn på database for linux.
$password=""; //adgangskode.
$database_name="portfolielogin"; //Navnet på min SQL database.
$tabel_name="loginform"; //Navnet på min SQL databases tabel hvor mine brugere står listet. 


$connect = mysqli_connect($hostname, $username, $password, $database_name);


if (!$connect){
    die("Connection failed: " . mysqli_connect_error ());
}


$user = $_POST ['brugernavn'];

$pass = $_POST ['adgangskode'];

 
$sqldatabase = "SELECT * FROM $tabel_name WHERE brugernavn = '$user' && adgangskode = '$pass'";

$outputresult = mysqli_query($connect, $sqldatabase);


$count = mysqli_num_rows($outputresult);


if($count == 1){

    $_SESSION ['login'] = 1;

    header("location:loggedind.php");

} else {

    header("location:login.html");

}

mysqli_close($connect);//Jeg er ikke helt sikker på om jeg skal lukke min connection?
