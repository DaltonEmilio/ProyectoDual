function ir(){

var c=1234;
var u="demilio";
if (document.form.password.value==c&&document.form.login.value==u){
    window.location="cliente.php";
    }

    
else{
    
    //alert("Usuario o password incorrecto");
    //window.location.reload();
   document.getElementById ("error").innerHTML = "Usuario o Password incorrecto";
   document.form.password.value= "";
   document.form.login.value= "";
    
    }

}
