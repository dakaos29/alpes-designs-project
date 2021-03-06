<?php
include ('connectdb.php');

if(isset($_POST['submit'])){

  if ( !empty($_POST['correo']))
  {
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $puesto = $_POST['puesto'];


    
    if(isset($_POST['nombres'])){
        $nombres = filter_var(trim($_POST['nombres']), FILTER_SANITIZE_STRING); 
   
    }
    if(isset($_POST['apellidos'])){
        $apellidos = filter_var(trim($_POST['apellidos']), FILTER_SANITIZE_STRING); 
   
    }
    if(isset($_POST['correo'])){
        $correo = filter_var(trim($_POST['correo']), FILTER_SANITIZE_EMAIL); 
   
    }
    if(isset($_POST['password'])){
        $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING); 
   
    }
    if(isset($_POST['puesto'])){
        $puesto = filter_var(trim($_POST['puesto']), FILTER_SANITIZE_STRING); 
   
    }

    if(empty($nombres)){
        echo json_encode(array(
            'error' => true,
            'campo' => 'nombres'
        ));
        return;
    }

    if(empty($apellidos)){
        echo json_encode(array(
            'error' => true,
            'campo' => 'apellidos'
        ));
        return;
    }
    if(empty($correo)){
        echo json_encode(array(
            'error' => true,
            'campo' => 'correo'
        ));
        return;
    }
    if(empty($password)){
        echo json_encode(array(
            'error' => true,
            'campo' => 'password'
        ));
        return;
    }
    if(empty($puesto)){
        echo json_encode(array(
            'error' => true,
            'campo' => 'puesto'
        ));
        return;
    }

    $query = "INSERT INTO empleados (id_empleado, nombres, apellidos, correo, password, puesto) VALUES (NULL,'$nombres','$apellidos','$correo','$password','$puesto')";
    $run = mysqli_query($conn, $query) or die (mysqli_error());
    if($run){
      echo 'data submitted';
    } else {
      echo 'data wa not submitted';
    }
  }
}
?>

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
          href="production.html" 
          class="nav-link"
          >
          For Clients
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
        <li class="nav-item">
            <a href="/login-projects.html" class="nav-link disabled">Inicia Sesion</a>
          </li>
      </ul>
    </div>

  </div>
  </nav>
  <!-- navbar -->

  <!-- formularios -->
  <div class="container my-5 py-5">

    <h1>Create User</h1>

    <main class="container mt-n5 bg-light">
      <p class="lead text-center">To enter to the projects options you have to create an account</p>

      <form action="" 
      method="post"
      class="row g-3 needs-validation" 
      id="formulario" novalidate>
        <div class="col-md-6">
          <label for="validationCustom01" class="form-label">First Name</label>
          <input 
          type="text" 
          class="form-control" 
          id="validationCustom01" 
          name="nombre" required>
          <div class="valid-feedback">Looks good!</div>
          <div class="invalid-feedback">Write a valid name</div>
        </div>
        <div class="col-md-6">
          <label for="validationCustom02" class="form-label">Last Name</label>
          <input 
          type="text" 
          class="form-control" 
          id="validationCustom02" 
          name="apellido" required>
          <div class="valid-feedback">Looks good!</div>
          <div class="invalid-feedback">Write a valid name</div>
        </div>
        <div class="col-md-6">
          <label for="validationCustomEmail" class="form-label">Email</label>
            <input 
            type="email" 
            class="form-control" 
            id="validationCustomEmail"
            name="email"
            aria-describedby="inputGroupPrepend" required>
            <div class="valid-feedback">Looks good!</div>
            <div class="invalid-feedback">Please provide an email.</div>
          </div>
          <div class="col-md-6">
            <label for="validationCustomPassword" class="form-label">Password</label>
              <input 
              type="password" 
              class="form-control" 
              id="validationCustomPassword" 
              name="password"
              aria-describedby="inputGroupPrepend" required>
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please put a password.</div>
            </div>
            <div class="col-md-3">
              <label for="validationCustom03" class="form-label">Telephone</label>
              <input 
              type="text" 
              class="form-control" 
              id="validationCustom03" 
              name="telefono" required>
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please provide your phone number.</div>
            </div>
        <div class="col-md-3">
          <label for="validationCustom04" class="form-label">City</label>
          <input 
          type="text" 
          class="form-control" 
          id="validationCustom04"
          name="ciudad" required>
          <div class="valid-feedback">Looks good!</div>
          <div class="invalid-feedback">Please provide a valid city.</div>
        </div>
        <div class="col-md-3">
          <label for="validationCustom05" class="form-label">State</label>
          <select
          type="text"
          class="form-select"
          id="validationCustom05"
          name="estado" required>
            <option selected disabled value="">Choose...</option>
            <option>Another...</option>
            <option>Arizona</option>
            <option>Sonora</option>
          </select>
          <div class="valid-feedback">Looks good!</div>
          <div class="invalid-feedback">Please select a valid state.</div>
        </div>
      
        <div class="col-md-3">
          <label for="validationCustom06" class="form-label">Zip</label>
          <input 
          type="text" 
          class="form-control" 
          id="validationCustom06"
          name="zip" required>
          <div class="valid-feedback">Looks good!</div>
          <div class="invalid-feedback">Please provide a valid zip.</div>
        </div>

        <div class="col-12">
          <div class="form-check">
            <input 
            class="form-check-input" 
            type="checkbox" 
            name="terms" 
            id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
              Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div>
        <div class="col-12">
          <input type="submit" class="btn btn-primary" name="submit" value="submit"/>
          <div class="valid-feedback">User creation success!</div>
                <div class="invalid-feedback">Server error</div>
        </div>
      </form>
  </main>
</div>

   <!-- formularios -->

   <!-- opciones y offcanvas -->
<div class="container text-center">
    <div class="card">
        <div class="card-body">
            <a class="card-link" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Terms and Conditions</a>
            <a href="#" class="card-link">Forgot Password?</a>
            <a href="login-projects.html" class="card-link">You have an account? Login here</a>
        </div>
    </div>    
</div>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Terminos y Condiciones</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
      Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
    </div>
    <div class="dropdown mt-3">
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- opciones y offcanvas -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>
</html>