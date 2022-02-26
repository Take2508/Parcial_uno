<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>AJAX</title>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Prueba</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  </head>
  <body>

  <br>

  <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 p-5 bg-white shadow-lg rounded">
                <form method="POST">
                <h2>Registro</h2>

                    <hr>

                    <div class="form-group">
                        <label for="codigo">Codigo</label>
                        <input id="codigo" class="form-control" type="text" name="codigo">
                    </div>

                    <div class="form-group">
                        <label for="nombres">Nombres</label>
                        <input id="nombres" class="form-control" type="text" name="nombres">
                    </div>

                    <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                        <input id="apellidos" class="form-control" type="text" name="Apellidos">
                    </div>

                    <div class="form-group">
                        <label for="dui">DUI</label>
                        <input id="dui" class="form-control" type="text" name="dui">
                    </div>

                    <div class="form-group">
                        <label for="dui">Direccion</label>
                        <input id="direccion" class="form-control" type="text" name="direccion">
                    </div>

                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input id="telefono" class="form-control" type="text" name="telefono">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" type="text" name="email">
                    </div>

                   

                    <br>

                    <button class="btn btn-primary" id="enviar" type="button">Enviar</button>
                </form>
            </div>
        </div>
        <br>
        <div id="Msg">
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="Ajax/funcion.js"></script> 
  </body>
</html>