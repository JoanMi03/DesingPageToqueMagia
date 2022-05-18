<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;700&family=Lobster&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ffec4ec2ed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="shortcut icon" href="./images/logos/logo.png" type="image/x-icon">

    <title>Un toque de magia | Login</title>
  </head>
  <body >
      <section>
        <div class="row g-0">
            <div class="col-lg-7 d-none d-lg-block">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item img-1 min-vh-100 active">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="font-weight-bold">Un pueblo de Encanto y Magia</h5>
                          <a class="text-muted text-decoration-none">Visita nuestra tienda</a>
                        </div>
                      </div>
                      <div class="carousel-item img-2 min-vh-100">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="font-weight-bold">Un pueblo de grandes aventuras</h5>
                          <a class="text-muted text-decoration-none">Visita nuestra tienda</a>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
            <div class="col-lg-5 ">
                <div class="px-lg-5 pt-lg-5 p-4  w-100">
                    <h3 class="nombre text-center">Un Toque de Magia</h3>
                </div>
                <div class="align-self-center w-100 px-lg-5 py-lg-2 p-4">
                <h1 class="font-weight-bold mb-3 text-center">Bienvenido</h1>
                <h3 class="text-center">¿Ya tienes una cuenta?</h3>
                <p class="text-center mb-4">¡Inicia sesión para ver la gran variedad <br>
                  de productos que tenemos para ti!</p>
                <form class="mb-5" action="sesion.php" method="POST" >
                    <div class="mb-4">
                      <label for="usuario" class="form-label font-weight-bold">Usuario</label>
                      <input type="email" class="form-control  border-1" id="exampleInputEmail1" placeholder="Ingresa tu email" name="usuario" autocomplete="on"  required>
                    </div>
                    <div class="mb-4">
                      <label for="password" class="form-label font-weight-bold">Contraseña</label>
                      <input type="password" class="form-control  border-1 mb-2" name="password" autocomplete="on" placeholder="Ingresa tu contraseña" required>
                    
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
                    <a href="registro.php" class="font-weight-bold text-decoration-none registro">¿Todavia no tienes una cuenta? Crea una ahora</a>
                  </form>
                    
                
                </div>
            </div>
        </div>
      </section>
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>
