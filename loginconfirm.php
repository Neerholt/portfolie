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

    header("location:https://www.google.com/search?rlz=1C1CHBD_daDK872DK872&sxsrf=ACYBGNQmISqdK_gAsp7Bs11Ma2dZkefUZw%3A1571988340218&ei=dKOyXYn8DK6cmwXAkYCADw&q=how+to+hack+a+website+with+sql+injection&oq=how+to+hack+a+website+with+s&gs_l=psy-ab.3.0.0i203l2.5252.13746..15121...1.1..0.149.2724.19j9......0....1..gws-wiz.....10..0i71j35i362i39j35i39i19j35i39j0i131j0j0i67.BfNeZUPIDoU");

}

mysqli_close($connect);//Jeg er ikke helt sikker på om jeg skal lukke min connection?
