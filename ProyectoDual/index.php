
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="author" content="Dalton Vinicio Mustafa">
    <title>WHOLE AUTOMATION</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!<!-- optimizar pagina para dispositivos moviles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/pricing/">
    <link href="pricing.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
   <script src="jquery-1.7.2.min.js" type="text/javascript"></script> 
           <script type="text/javascript" language="javascript">
            $(document).ready(function(){

                $('#enciende').click(function(){
                    //saco el valor accediendo a un input de tipo text y name = tireqty
                    //var on=($('input:radio[name=on]').val);
                    var on=($('#enciende').attr('name'));
                    //alert(on); 
                    document.location.href="calderaOn.php?on="+on;
                    alert("Caldera Prendida");

                });
                
                $('#apaga').click(function(){
                    //var off=($('input:radio[name=off]').val());
                    var off=($('#apaga').attr('name'));
                    //alert(off);
                    document.location.href="calderaOff.php?off="+off;
                    alert("Caldera apagada");
                });
         
            });
                            
        </script>


  </head>
  <body>
      <!--Esta parte del cogigo es la confirmacion de si esta encendiada o apagada pero no funciona del todo.-->
     <?php
      
      #if(isset($_GET["error"]) && $_GET["error"]==0){
        #echo "Hola";
      #}
      #elseif (isset($_GET["error"]) && $_GET["error"]==1) {
     # echo"algo ha salido mal";
    #}
      
      ?>

    <div class="primero"> 
      <a class="segundo" href="index.html"> 
        WHOLE AUTOMATION
      </a>
      <!--Icono de salida de index.html-->
      <a class="link" href="login.html">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
          <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
        </svg>
      </a>
    </div>


    
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
  

</svg>
<div class="miContenedor">
<div class="container py-3">
  <header>

  </header>

  <main>
    <h1 class="display-6 text-center mb-4">Controla tu hogar</h1>

    <div class="table-responsive">
      <div>
      </div>
      <table class="table text-center">
        <thead>
          <tr>
            <th style="width: 34%;"></th>
            <th id="on" style="width: 22%;">on</th>
            <th id="off" style="width: 22%;">of</th>
            <th style="width: 22%;">Estado</th>
          </tr>
        </thead>
        <tbody>
          <tr>                    
            <th scope="row"  class="text-start">Caldera</th>

            <td><input type="button" method="get" id="enciende" name="on" class="btn btn-success"></td>
            <td><input type="button" method="get" id="apaga" name="off" class="btn btn-danger"></td>
            <td><svg class="bi" width="54" height="54"><use xlink:href="#check"/></svg></td>
          </tr>
          
          <tr>
            <th scope="row" class="text-start">Luz1</th>
            <td><input type="radio" value=""></td>
            <td><input type="radio" value="first_checkbox"></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            
          </tr>
          <tr>
            <th scope="row" class="text-start">Luz2</th>
            <td><input type="radio" value="first_checkbox"></td>
            <td><input type="radio"  value="first_checkbox"></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
        </tbody>

      </table>
    </div>
  </main>

</div>
</div>


    
  </body>
</html>
