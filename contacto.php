<!doctype html>
<html lang="es-ES">
<head>
  <meta charset="utf-8">
  <meta name="author" content="Dalton Vinicio Mustafa">
  <title>WHOLE AUTOMATION</title>
  <link href="Css/estilosContacto.css" rel="stylesheet">
</head>

    <body>
        
        <h1 class="titulo">whole<span style="color: #0174DF; ">Auto</span>mation.es</h1>
        
            <form class="form" method='POST' action='enviar.php'>
            <h2>Contactanos</h2> 
            <p  type="Nombre:"><input id="nombre" name="nombre" required pattern="([a-zA-Z0-9]+\s){1,}([a-zA-Z0-9]+)" title="Ej: Dalton Enríquez" placeholder="Nombre y Apellidos..."></p>
            <p  type="Email:"><input id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                        title="Introduce un email ejemplo: calamot@gmail.com" placeholder="Correo electronico..."></p>
            <p  type="Mensaje:"><input required="" id="asunto" name="asunto" placeholder="Escribenos un breve mensaje..."></p>
            <button type="submit">ENVIAR</button>
            
          </form>
            
 

    </body>

</html>