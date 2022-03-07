<?php

    $on = $_GET['on'];
      
    $sor=0;
       
    if ($on== "on"){
        $sor=1;
        //echo $sor;
        $fileList = shell_exec('/home/pi/Desktop/calefaccion/calderaOn.sh');
        echo "Caldera prendida";
        
        header("Location: cliente.php?error=0&caldera_encendida=1");
        //echo "<pre> $fileList </pre>";
    } else {
        //echo $sor;
        echo "Error";
        header("Location: cliente.php?error=1");
    }
    
    
    
    
    

?>