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
            $const1= XdYtM;
            header('Location:./accept.php/' . $url. $const1. $url, true, $permanent ? 301 : 302);

            exit();
        }

        Redirect(url(), false); 

         
            
    } elseif(isset($_POST['button2'])) {
               
        function Redirect($url, $permanent = false)
        {   
            $const2= PoTrnm;
            header('Location:./accept2.php/' . $url. $const2. $url, true, $permanent ? 301 : 302);

            exit();
        }

        Redirect(url(), false);  
            
    } elseif(isset($_POST['button3'])) {
                
        function Redirect($url, $permanent = false)
        {   
            $const3= HrtYO;
            header('Location:./accept3.php/' . $url. $const3. $url, true, $permanent ? 301 : 302);

            exit();
        }

        Redirect(url(), false); 
    }                    
           
    
?>
