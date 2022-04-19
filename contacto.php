<!doctype html>
<html lang="es-ES">
<head>
  <meta charset="utf-8">
  <meta name="author" content="Dalton-Emilio, Vinicio, Mustafa">
  <title>WHOLE AUTOMATION</title>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="css/estilosContacto.css" rel="stylesheet">
  <link href="signin.css" rel="stylesheet">
  
</head>

    <body style="font-family: Arial,Helvetica,sans-serif;">
        
        <h1 class="titulo">whole<span style="color: #0174DF; ">Auto</span>mation</h1>
        <div class="fondoMenu">
        <nav class="menu">
            <a href="index.html" >Inicio</a>
            <a href="quienesSomos.php">Quienes somos</a>
            <a href="domotica.php" >Domótica</a>
            <a href="contacto.php" style="color: #0174DF;">Contacto</a>
            
        </nav>
        </div>
        
        <form class="form" method="POST" action="enviar.php">
             <h2>Contactanos</h2> 
            <p  type="Nombre y Apellidos:"><input id="nombre" name="nombre" required pattern="([a-zA-Z0-9]+\s){1,}([a-zA-Z0-9]+)" title="Ej: Dalton Emilio Enríquez" placeholder="Nombre y Apellidos..."></p>
            <p  type="Email:"><input id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                        title="Ejemplo: calamot@gmail.com" placeholder="Correo electronico..."></p>
            <p  type="Telefono:"><input required="" type="text" name="telefono" placeholder="Telefono..." title="Ejemplo: 666-999-444"></p>
            <p  type="Mensaje:"><textarea  name="Mensaje" placeholder="Escribe mensaje..."></textarea></p>
            <input id="button" type="submit" name="submit" value="Enviar">
        </form>
        
 

    </body>

</html>