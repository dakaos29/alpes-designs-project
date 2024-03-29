<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Alpes Designs Projects</title>
</head>
<body>

    <!-- navbar -->
  <nav id="navbar-example3" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
    <a href="/index.html" class="navbar-brand">
     <span class="align-middle">Alpes Designs Projects</span> 
    </a>

    <button class="navbar-toggler" 
    type="button" 
    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
    aria-expanded="false" 
    aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a 
          href="index.html" 
          class="nav-link active"
          aria-current="page"
          >
          Home
        </a>
        </li>
        <li class="nav-item">
          <a 
          href="production.html" 
          class="nav-link"
          >
          Projects
        </a>
        </li>
        <li class="nav-item">
          <a 
          href="login-projects.php" 
          class="nav-link"
          >
          For Production
        </a>
        </li>
        <li class="nav-item">
          <a 
          href="https://www.alpesdesigns.com/contact/" 
          class="nav-link"
          >
          Contact Us
        </a>
        </li>
        <!-- <li class="nav-item">
            <a href="/login-projects.html" class="nav-link disabled">Inicia Sesion</a>
          </li> -->
      </ul>
    </div>

  </div>
  </nav>
  <!-- navbar -->

  <!-- formularios -->
  <div class="container my-5 py-5">

    <h1>Inicia Sesion</h1>

    <form action="validar-empleado.php" 
    method="post" 
    id="formulario">
        <div class="mb-3">
            <label for="email" class="form-label">Email: </label>
            <input type="email"
                    id="correo"
                    class="form-control"
                    placeholder="Ingresa tu Email"
                    aria-describedby="emailHelp"
                    name="correo"
                    required
            >
        </div>
            <div class="mb-3">
                <label for="contraseña" class="form-label">Contraseña:</label>
                <input type="password"
                class="form-control"
                placeholder="Ingresa tu contraseña"
                id="password"
                name="password"
                required
                >
            </div>

            <div class="col-12">
              <input type="submit" class="btn btn-success" name="submit" value="Ingresar" id="btnEnviar" />
            </div>
         
    </form>
</div>

   <!-- formularios -->
<div class="container text-center">
    <div class="card">
        <div class="card-body">
            <a href="#" class="card-link">Olvidaste tu contraseña?</a>
            <a href="sign-empleados.php" class="card-link">Aun no estas registrado? Registrate aqui</a>
        </div>
    </div>    
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>