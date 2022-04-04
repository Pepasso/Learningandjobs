<?php

    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    $user_name = "dev-adm_user3";
    $password = "pFkv4erpi";
    $database = "dev-adm_db3";
    $server = "213.239.218.133";

    $link = mysqli_connect("$server","$user_name","$password");

    $mysqli->select_db("$database");

    if (isset($_POST['submit'])) {
    $ip_adress = $_POST['ip_adress'];
    $ip_addressadd = $_POST['ip_addressadd'];
    $date = $_POST['date'];

    $mysqli->query ($link, " INSERT INTO 'dev_form' ('ip_adress', 'ip_addressadd', 'date') VALUES ('$ip_adress', '$ip_adressadd', '$date') ");

    if ($order) {
        echo '<br>Данные добавленны.';
    } else {
        echo '<br>Данные не могут быть внесены.';
    }
    }
?>