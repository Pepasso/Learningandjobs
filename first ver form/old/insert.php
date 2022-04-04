<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

if($_SERVER["REQUEST_METHOD"]=="POST"){
    require'connect.php';
    addip();
}
function addip(){

    global $connect;

    $ip_adress = $_POST["ip_adress"];
    $ip_adressadd = $_POST["ip_adressadd"];
    $date = $_POST["date"];

    $query="INSERT INTO  `dev_form` (  `ip_adress` ,  `ip_adressadd` ,  `date` ) 
    VALUES ('$ip_adress','$ip_adressadd','$date')";
    mysqli_query($connect,$query)or die (mysqli_error($connect));
    mysqli_close($connect);
}
?>