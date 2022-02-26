<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Nuevo Cliente</title>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color: aliceblue;">Parcial 1</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" style="color: aliceblue;" href="index.html">Clientes</a>
                    </li>
                    
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
</head>

<body>
    <div class="container">
        <br />
        <div class="row justify-content-center">
            <div class="col-6 p-5 bg-white shadow-lg rounded">
                <h3>Nuevo Cliente </h3>
                <hr />
                <form method="post" action="recibe_clientes.php">
                <div class="form-group">
                        <label for="codigo">Codigo:</label>
                        <input id="codigo" class="form-control" type="text" name="codigo" />
                    </div>
                    <div class="form-group">
                        <label for="nombres">Nombres:</label>
                        <input id="nombres" class="form-control" type="text" name="nombres" />
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos:</label>
                        <input id="apellidos" class="form-control" type="text" name="apellidos" />
                    </div>
                    <div class="form-group">
                        <label for="dui">DUI</label>
                        <input id="dui" class="form-control" type="text" name="dui" />
                    </div>
                    <div class="form-group">
                        <label for="direccion">Direccion</label>
                        <input id="direccion" class="form-control" type="text" name="direccion" />
                    </div>
                    <div class="form-group">
                        <label for="telefonoi">Telefono.</label>
                        <input id="telefono" class="form-control" type="text" name="telefono" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="emial" class="form-control" type="text" name="email" />
                    </div>
                   
                    <br />
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>