<?php

    $off = $_GET['off'];     
    $sor=1;
       
    if ($off== "off"){
        $sor=0;
        //echo $sor;
        $fileList = shell_exec('/home/pi/Desktop/calefaccion/calderaOff.sh');
        echo "Caldera apagada";
    } else {
        echo "Error";
    }
    
    header("Location: index.php");
    
    
?>

