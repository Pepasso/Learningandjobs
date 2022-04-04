<?php
    $servername = "localhost";
    $username = "dev-adm_user3";
    $password = "pFkv4erpri";
    $databaseName = "dev-adm_db3";

//    $connect = new mysqli($servername,$username,$password,$databaseName);
    $link = mysqli_connect($servername,$username,$password,$databaseName);

    $ip_adressaddErr = "";
    $ip = $_SERVER['REMOTE_ADDR'];

    if(isset($_POST['regbut']))
    {   
        $ip_adress = $ip;
        if (empty($_POST['ip_adressadd'])){
            $ip_adressaddErr = "Заполните это поле";
        } else {
            $ip_adressadd = $_POST['ip_adressadd'];
        }
        $flag = $_POST['flag'];
        // $date =  date("d/m/Y");
        
        $ip_adressadd = $_POST['ip_adressadd'];
            if (!preg_match("\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}",$ip_adressadd)) {
                $ip_adressaddErr = "Введите данные в указаном формате";
            }

            if ($ip_adressadd == '255.255.255.255'||$ip_adressadd == '0xff.0xff.0xff.0xff'||
	        $ip_adressadd == '0377.0377.0377.0377')
	        {
		        return  header('location: fail.php' );
	        }
	
	        $tolong=ip2long($ip_adressadd);
	
	        if ($tolong == -1||$tolong===FALSE) return header('location: fail.php' );
	        else {
                if (mysqli_query($link, "INSERT INTO dev_form (ip_adress, ip_adressadd, flag) VALUES ('$ip_adress', '$ip_adressadd', '$flag')") === TRUE) {
                    header('location: success.php' );
                    } else {
                        header('location: fail.php' );
                    }
                    mysqli_close($link);
            }    
            
        }

        
     

        if ($connect->connect_error) {
            die("Connection failed: " . $connect->connect_error);
        }

        {
        // echo " Выполнение запроса прошло успешно";
    }    

?>

