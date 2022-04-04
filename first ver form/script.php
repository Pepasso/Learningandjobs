<?php
    $servername = "localhost";
    $username = "dev-adm_user3";
    $password = "pFkv4erpri";
    $databaseName = "dev-adm_db3";

    $link = mysqli_connect($servername,$username,$password,$databaseName);

    // $query = "SELECT * FROM date";
    // $result = mysqli_query($link, $query);

    // if {
    //   $query < now() - INTERVAL 2 DAY  
    // }

    // mysqli_query($link, "DELETE FROM dev_form WHERE date < NOW() - INTERVAL 2 DAY" === true);
    mysqli_query($link, "UPDATE `dev_form` SET flag = 'false' WHERE date < now() - INTERVAL 2 DAY");

    
     
    mysqli_close($link);
    // $query = "DELETE FROM dev_form WHERE column_name = 'date' and TIMESTAMP < NOW() - INTERVAL 2 DAYS";

    
?>   