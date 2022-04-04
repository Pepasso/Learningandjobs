<?php 
    
    function url() {
        $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    
        
        $random = '';
        $length= '20';
        
        for ($i = 0; $i < $length; $i++) {
            $random .= $characters[rand() %strlen($characters)];
        }
        
        return $random;

        $random = url();
    }

    if(isset($_POST['button1'])) {
    
            
          
    
            
        function Redirect($url, $permanent = false)
        {   
            $const= 123321;
            header('Location:./accept.php/' . $url. $const. $url, true, $permanent ? 301 : 302);

            exit();
        }

        Redirect(url(), false); 

         
            
    } elseif(isset($_POST['button2'])) {
               
        function Redirect($url, $permanent = false)
        {   
            $const= 123321;
            header('Location:./accept.php/' . $url. $const. $url, true, $permanent ? 301 : 302);

            exit();
        }

        Redirect(url(), false);  
            
    } elseif(isset($_POST['button3'])) {
                
        function Redirect($url, $permanent = false)
        {   
            $const= 123321;
            header('Location:./accept.php/' . $url. $const. $url, true, $permanent ? 301 : 302);

            exit();
        }

        Redirect(url(), false);                 
           
    }
?>
