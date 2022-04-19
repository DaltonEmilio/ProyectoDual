<?php

include('db.php');

$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['password'];


$consulta = "SELECT* FROM Personal where usuario = '$USUARIO' and password ='$PASSWORD' ";
$resultado= mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);



if($filas){
    session_start();
    $_SESSION["username"] = $USUARIO;
    header("Location:cliente.php");
    

}else{
    header("Location:index.html?error=1");
    
    echo'<p>Usuario o Contraseña incorrecto</p>';
    
   
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>