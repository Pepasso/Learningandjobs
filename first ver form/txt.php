<?php
    $fp1 = fopen( '/home/dev-adm/web/dev.adm-nk.ru/public_html/write.txt', 'w' );
    $servername = "localhost";
    $username = "dev-adm_user3";
    $password = "pFkv4erpri";
    $databaseName = "dev-adm_db3";

    
    $link = mysqli_connect($servername,$username,$password,$databaseName);
    

    

    $result = mysqli_query($link, "SELECT * ip_adressadd FROM `dev_form` WHERE flag = 'true' ");
    while($row = mysqli_fetch_assoc($result))
    {
        $outPut = $row['ip_adressadd']."\t\n";
    } 

    fwrite( $fp1,$outPut); 
    mysqli_close($link);
    fclose( $fp1 );
?>    



<!-- 
 $fp1 = fopen( 'obspg.txt', 'w' );
  fwrite( $fp1,"RETSKU\tProduct Title\tDetailed Description\tProduct Condition\tSelling Price\tAvailability\tProduct URL\tImage URL\tManufacturer Part Number\tManufacturer Name\tCategorization\tGender\tsize\tColor\n");
  $result = mysqli_query($con,"SELECT * FROM `TABLE 1` ");
  while($row = mysqli_fetch_array($result))
  {
     fwrite($fp1,$row[`id`]."\t".$row[`title`]."\t".  $row[`description`]."\t".$row[`condition`]."\t". $row[`price`]."\t".$row[`availability`]."\t".$row[`link`]."\t". $row[`image_link`]."\t".$row[`mpn`]."\t".$row[`brand`]."\t".$row[`google_product_category`]."\t".$row[`Gender`]."\t".$row[`size`]."\t".$row[`Color`]."\n");
  } 
  fclose( $fp1 ); -->

  $ip = '';
if (isset($_SERVER['REMOTE_ADDR']))
$ip = $_SERVER['REMOTE_ADDR'];
else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
else if(isset($_SERVER['HTTP_X_FORWARDED']))
$ip = $_SERVER['HTTP_X_FORWARDED'];
else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
$ip = $_SERVER['HTTP_FORWARDED_FOR'];
else if(isset($_SERVER['HTTP_FORWARDED']))
$ip = $_SERVER['HTTP_FORWARDED'];
else if(isset($_SERVER['HTTP_CLIENT_IP']))
$ip = $_SERVER['HTTP_CLIENT_IP'];