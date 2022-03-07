<!doctype html>
<html lang="es-ES">

<head>
  <meta charset="utf-8">
  <meta name="author" content="Dalton Vinicio Mustafa">
  <title>WHOLE AUTOMATION</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="signin.css" rel="stylesheet">
  <script src="inicio.js"></script>
  <script src="jquery-1.7.2.min.js" type="text/javascript"></script>
  
   

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
  
</head>
<body >
    <h1 class="titulo">whole<span style="color: #0174DF; ">Auto</span>mation.es</h1>
    <div class="fondoMenu">
        <nav class="menu">
            <a href="index.php">Inicio</a>
            <a href="quienesSomos.php">Quienes somos</a>
            <a href="domotica.php">Domótica</a>
            <a href="contacto.php">contacto</a>
            
      </nav>
    </div>
    <div class="carro">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

          <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img_carousel/img1.jpg" alt="Los Angeles" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="img_carousel/img2.jpg" alt="Chicago" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="img_carousel/img3.jpg" alt="New York" class="d-block w-100">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
    </div>


        <div class="login">
            <form name=form >
              <h1  class="h3 mb-3 fw-normal">Sign in</h1>

              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" name="login" placeholder="Usuario">
                <label for="floatingInput">Usuario</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Contraseña">
                <label for="floatingPassword">Contraseña</label>
              </div>
              <div id="error"></div>
              <button class="w-100 btn btn-lg btn-primary" onclick="ir()" type="button" action="funciones.php"
                value="INICIAR SESION">Sign in</button>
            </form>
        </div>
    <footer> <p>&copy; 2021–2021 WHOLE AUTOMATION</p></footer>
</body>

</html>