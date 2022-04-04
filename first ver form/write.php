<?php
    $fh = fopen('/home/dev-adm/web/dev.adm-nk.ru/public_html/txt/write.txt', 'w');
    $servername = "localhost";
    $username = "dev-adm_user3";
    $password = "pFkv4erpri";
    $databaseName = "dev-adm_db3";
    $link = mysqli_connect($servername,$username,$password,$databaseName);

    $result = mysqli_query($link, 'SELECT ip_adressadd FROM dev_form WHERE flag = "true" ');
    while ($row = mysqli_fetch_array($result)) {
        $last = end($row);
        $num = mysqli_num_fields($result);
        for($i = 0; $i < $num; $i++) {
            fwrite($fh, $row[$i]);
            if ($row[$i] !=$last)
                fwrite($fh, ", ");
        }
        fwrite($fh, "\n");
    } fclose($fh);
    mysqli_close($link);

    // sqlcmd -s "localhost" -U "dev-adm_user3" -P "pFkv4erpri" -d "dev-adm_db3" -Q "SELECT ip_adress, ip_adressadd FROM dev_forms WHERE flag = "true"" > write.txt

?>