<?php 
    function url() {
        $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
     
        srand((double)microtime()*1000000);
        
        $random = '';
        
        for ($i = 0; $i < $length; $i++) {
            $random .= $characters[rand() % strlen($characters)];
        }
        
        return $random;

        session_start();

        $_SESSION['random_number'] = url();
    }   
?>    
