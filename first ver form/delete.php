<?php
    $servername = "localhost";
    $username = "dev-adm_user3";
    $password = "pFkv4erpri";
    $databaseName = "dev-adm_db3";

    $link = mysqli_connect($servername,$username,$password,$databaseName);

    mysqli_query($link, "DELETE from `dev_form` WHERE flag = 'false' ");

    
     
    mysqli_close($link);
?>