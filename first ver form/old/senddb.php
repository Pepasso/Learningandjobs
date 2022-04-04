<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    $user = "dev-adm_user3";    
    $pass = "pFkv4erpri";

    $dbh = new mysqli('mysqli:host=213.239.218.133; dbname=dev_form', $user, $pass);
    
    // выполняем операции с базой данных
    if (isset($_POST['submit'])) {
        $ip_adress = $_POST['ip_adress'];
        $ip_addressadd = $_POST['ip_addressadd'];
        $date = $_POST['date'];

      $sql = (" INSERT INTO 'dev-adm_db3' ('ip_adress', 'ip_addressadd', 'date') VALUES ('$ip_adress', '$ip_adressadd', '$date') ");
      
    }    
    {
        echo "Выполнение запроса прошло успешно";
    }
    
    // закрываем подключение
    $sql = null;
    $stmt = null;
    $dbh = null;
?>